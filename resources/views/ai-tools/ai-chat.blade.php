@extends('ai-tools.layout.app')
@section('page-content')
<!-- Start:: Content -->
    <div class="content-area">
        <div class="container-fluid p-md-0">

            <div class="inner-layout d-flex">
                <div class="left-bar p-4 overflow-y-auto">
                    <h6 class="mb-3">Chat History</h6>
                    <a href="#" class="btn bg-dark text-light w-100 rounded-pill" id="new-chat">New Chat</a>
                    <ul class="list-group gap-1 mt-3 li_animate list-unstyled" id="chat-history">
                        <li class="no-history">
                            <a href="#" class="list-group-item list-group-item-action p-3 rounded-3 border-0 active">
                                <p class="fs-12 mb-1 text-truncate text-center">No History</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="body-area d-flex align-items-start flex-column p-md-4 p-0 overflow-y-auto">
                    <ul class="list-unstyled message-list mb-0 pt-3 pt-md-0 w-100 overflow-y-auto" id="message-box">
                    </ul>
                    <div class="w-100 text-center" id="error-box"></div>
                    <div class="chat-input-container pt-3 pt-md-0 w-100 pb-2 pb-md-0">
                        <form id="ai-chat-form" enctype="multipart/form-data">
                            <div class="align-items-center border chat-input-wrapper d-flex gap-3 mb-3 p-lg-3 p-2 rounded-4">
                                <textarea class="form-control rounded-3 border-0" name="prompt" id="chat-prompt-input" placeholder="Type your message here..." rows="1"></textarea>
                                <div class="align-items-center chat-input-actions d-flex gap-1">
                                    <div id="image-preview-container" class="position-relative d-none">
                                        <img id="image-preview" src="" alt="Preview" style="max-width: 50px; max-height: 50px; border-radius: 8px;" accept="image/*">
                                        <span id="remove-image" style="position: absolute; top: -8px; right: -8px; background: red; color: white; border-radius: 50%; padding: 0px 6px; cursor: pointer;">×</span>
                                    </div>
                                    <label class="btn p-2 d-md-block d-none file-attach-btn" title="Attach file" for="chat-file-input">
                                        <svg class="hover-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M14.364 7.24264L7.86396 13.7426C7.46614 14.1405 7.24264 14.68 7.24264 15.2426C7.24264 15.8052 7.46614 16.3448 7.86396 16.7426C8.26179 17.1405 8.80135 17.364 9.36396 17.364C9.92657 17.364 10.4661 17.1405 10.864 16.7426L17.364 10.2426C18.1596 9.44699 18.6066 8.36786 18.6066 7.24264C18.6066 6.11742 18.1596 5.03829 17.364 4.24264C16.5683 3.44699 15.4892 3 14.364 3C13.2387 3 12.1596 3.44699 11.364 4.24264L4.86396 10.7426C3.67049 11.9361 3 13.5548 3 15.2426C3 16.9305 3.67049 18.5492 4.86396 19.7426C6.05744 20.9361 7.67613 21.6066 9.36396 21.6066C11.0518 21.6066 12.6705 20.9361 13.864 19.7426L20.364 13.2426" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </label>
                                    <input type="file" class="form-control" name="file-input" id="chat-file-input">
                                    <button class="btn p-2" title="Voice input" type="button" id="record">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 2m0 3a3 3 0 0 1 3 -3h0a3 3 0 0 1 3 3v5a3 3 0 0 1 -3 3h0a3 3 0 0 1 -3 -3z" />
                                            <path d="M5 10a7 7 0 0 0 14 0" />
                                            <path d="M8 21l8 0" />
                                            <path d="M12 17l0 4" />
                                        </svg>
                                    </button>
                                    <button type="submit" class="btn btn-primary ms-2" id="send-button">Send</button>
                                </div>
                            </div>
                        </form>
                        <ul
                            class="align-items-center chat-suggestions d-flex flex-wrap gap-1 li_animate list-unstyled mb-0">
                            <li><button class="btn btn-light rounded-pill border fs-12" onclick="setPrompt('Help me write PHP code')">Help me write PHP code</button></li>
                            <li><button class="btn btn-light rounded-pill border fs-12" onclick="setPrompt('Explain Figma Design basics')">Explain Figma Design basics</button></li>
                            <li><button class="btn btn-light rounded-pill border fs-12" onclick="setPrompt('Analyze this AI trend')">Analyze this AI trend</button></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End:: Content -->
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dompurify@3.0.5/dist/purify.min.js"></script>
    <script src="{{ asset('assets/js/env.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.btn-toggle-innersidebar').on('click', function () {
                $('body').toggleClass('show-innersidebar');
            });
        });
        var globChatGrpId = Date.now().toString(36) + Math.random().toString(36).substr(2, 5);
        let conversationContext = [];
        localStorage.setItem("conversationHistory", JSON.stringify([]));
        document.getElementById('new-chat').addEventListener('click', function () {
            globChatGrpId = Date.now().toString(36) + Math.random().toString(36).substr(2, 5);
            document.getElementById('message-box').innerHTML = "";
            document.getElementById('chat-prompt-input').value = "";
            document.getElementById('chat-file-input').value = "";
            conversationContext = [];
        });
        const btn = document.getElementById('record');
        const resultInput = document.getElementById('chat-prompt-input');
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new SpeechRecognition();
        recognition.interimResults = false;
        recognition.continuous = false;
        recognition.lang = 'en-US';

        record.addEventListener('mousedown', () => {
            recognition.start();
        });

        record.addEventListener('mouseup', () => {
            recognition.stop();
        });

        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            resultInput.value = transcript;
        };

        recognition.onerror = (event) => {
            console.error('Speech recognition error:', event.error);
        };

        function setPrompt(val) {
            document.getElementById("chat-prompt-input").value = val;
        }
        function getConversationHistory() {
            const data = localStorage.getItem("conversationHistory");
            return data ? JSON.parse(data) : [];
        }

        function saveConversationHistory(history) {
            localStorage.setItem("conversationHistory", JSON.stringify(history));
        }

        function addToConversationHistory(entry) {
            const history = getConversationHistory();
            history.push(entry);
            saveConversationHistory(history);
        }
        function historyClick(el) {
            const chatGrpId = el.dataset.chatGrpId;
            globChatGrpId = chatGrpId;
            let errorContentHtml = '';
            const conversationHistory = getConversationHistory();
            conversationHistory
                .filter(item => String(item.chatGrpId) === String(chatGrpId))
                .forEach(item => {
                    const { chatGrpId, timestamp, ...contextItem } = item;
                    conversationContext.push(contextItem);
                });
            $('#message-box').html("");
            var historyModel = "";
            if (Array.isArray(conversationHistory) && conversationHistory.length > 0) {
                conversationHistory.forEach(ContextItem => {
                    if (ContextItem.role == "user" && ContextItem.chatGrpId == chatGrpId) {
                        let userContentHtml = '';
                        ContextItem.parts.forEach(item => {
                            item.forEach(part => {
                                if ('text' in part) {
                                    userContentHtml += part.text;
                                    historyModel += part.text;
                                } else if ('inlineData' in part && part.inlineData.mimeType.startsWith("image/")) {
                                    const base64Image = part.inlineData.data;
                                    userContentHtml += `<img src="data:${part.inlineData.mimeType};base64,${base64Image}" 
                                                alt="Generated Image" class="send-image" />`;
                                } else {
                                    userContentHtml += `<p>[Unknown content]</p>`;
                                }
                            });
                        });
                        if (userContentHtml != "") {
                            $('#message-box').append(`<li class="mb-4 d-flex flex-row-reverse align-items-end">
                                <div class="max-width-70 text-end">
                                    <div class="user-info mb-1">
                                        <span><span class="fs-12 opacity-50">${ContextItem.timestamp}</span> <strong class="text-primary">You</strong> </span>
                                    </div>
                                    <div class="message py-3 px-4 rounded-4 mb-1 bg-secondary-subtle">
                                        `+ userContentHtml + `
                                    </div>
                                </div>
                            </li>`);
                        }
                    } else if (ContextItem.role == "model" && ContextItem.chatGrpId == chatGrpId) {
                        let modelContentHtml = '';
                        ContextItem.parts.forEach(part => {
                            if ('text' in part) {
                                modelContentHtml += marked.parse(part.text);
                            } else if ('inlineData' in part && part.inlineData.mimeType.startsWith("image/")) {
                                const base64Image = part.inlineData.data;
                                modelContentHtml += `<img src="data:${part.inlineData.mimeType};base64,${base64Image}" 
                                            alt="Generated Image" style="max-width: 100%; margin-top: 10px;" />`;
                            } else {
                                modelContentHtml += `<p>[Unknown content]</p>`;
                            }
                        });
                        if (modelContentHtml != "") {
                            const receveMessage = `<li class="mb-4 d-flex flex-row align-items-end msg-left">
                            <div class="d-flex gap-2 flex-column flex-md-row">
                                <div class="avatar lg rounded-circle mt-0 mt-md-4 bg-primary text-white p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 4m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                        <path d="M12 2v2" />
                                        <path d="M9 12v9" />
                                        <path d="M15 12v9" />
                                        <path d="M5 16l4 -2" />
                                        <path d="M15 14l4 2" />
                                        <path d="M9 18h6" />
                                        <path d="M10 8v.01" />
                                        <path d="M14 8v.01" />
                                    </svg>
                                </div>
                                <div class="ai-reply flex-grow-1 text-wrap">
                                    <span class="opacity-50 small">AI Assistant</span>
                                    <div class="message py-3 px-4 rounded-4 position-relative me-lg-5 lh-base">
                                        `+ modelContentHtml + `
                                        <span class="opacity-0 position-absolute small end-0 time">${ContextItem.timestamp}</span>
                                    </div>
                                </div>
                            </div>
                        </li>`;
                            $(`#message-box`).append(receveMessage);
                        }
                    } else {
                        errorContentHtml = '<p>No valid response received.</p>';
                    }
                });
            } else {
                errorContentHtml = '<p>No valid response received.</p>';
            }
        }

        $('.chat-app .chatlist-toggle').on('click', function () {
            $('.chat-app .order-1').toggleClass('open');
        });

        $('#ai-chat-form').on('submit', async function (e) {
            e.preventDefault();
            let inputText = document.getElementById('chat-prompt-input').value;
            const file = document.getElementById("chat-file-input").files[0];
            var base64Image = null;
            const parts = [];
            var imageUpload = true;
            if (file && !file.type.startsWith('image/')) {
                alert('Please select a valid image file (e.g., JPG, PNG, GIF)');
                this.value = '';
                imageUpload = false;
                return;
            }
            if (imageUpload && file != "" && file != undefined && file instanceof Blob) {
                base64Image = await fileToBase64(file);
                if (base64Image) {
                    const fullSrc = `data:image/png;base64,${base64Image}`;
                    var sendMessage = `<li class="mb-4 d-flex flex-row-reverse align-items-end">
                        <div class="max-width-70 text-end">
                            <div class="user-info mb-1">
                                <span><span class="fs-12 opacity-50">10:12 AM, Today</span> <strong class="text-primary">You</strong> </span>
                            </div>
                            <div class="message py-3 px-4 rounded-4 mb-1 bg-secondary-subtle">
                                <img src="${fullSrc}" class="send-image">
                            </div>
                        </div>
                    </li>`;
                    $('#message-box').append(sendMessage);
                    document.getElementById("chat-file-input").value = "";
                    parts.push({
                        inlineData: {
                            mimeType: file.type,
                            data: base64Image
                        }
                    });
                }
            }

            if (inputText != "") {
                parts.push({ text: inputText });
                var sendMessage = `<li class="mb-4 d-flex flex-row-reverse align-items-end">
                    <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                            <span><span class="fs-12 opacity-50">${getCurrentTimeWithAmPm()}</span> <strong class="text-primary">You</strong> </span>
                        </div>
                        <div class="message py-3 px-4 rounded-4 mb-1 bg-secondary-subtle">
                            `+ inputText + `
                        </div>
                    </div>
                </li>`;
                $('#message-box').append(sendMessage);
                $('#chat-prompt-input').val("");
            }

            if (inputText != "" || (imageUpload && file != "" && file != undefined)) {
                $('#remove-image').trigger('click');
                $('#send-button').prop('disabled', true);
                var typingId = 'typing-' + Date.now();
                var typingPlaceholder = `
                <li id="${typingId}" class="mb-3 d-flex flex-row align-items-end">
                    <div class="max-width-70">
                        <div class="card p-2">
                            <span class="typing-dots"></span>
                        </div>
                    </div>
                </li>`;
                $('#message-box').append(typingPlaceholder);
                const apiKey = window.env.GEMINI_API_KEY;
                var url = "";
                var generationConfig = { "responseModalities": ["TEXT"] };
                url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=${apiKey}`;
                conversationContext.push({
                    role: "user",
                    parts: [parts]
                });
                addToConversationHistory({
                    role: "user",
                    parts: [parts],
                    chatGrpId: globChatGrpId,
                    timestamp: getCurrentTimeWithAmPm()
                });
                $.ajax({
                    url: url,
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        contents: conversationContext,
                        generationConfig: generationConfig
                    }),
                    success: function (response) {
                        const parts = response?.candidates?.[0]?.content?.parts;
                        let contentHtml = '';
                        var historyModel = "";
                        if (Array.isArray(parts) && parts.length > 0) {
                            parts.forEach(part => {
                                if ('text' in part) {
                                    contentHtml += marked.parse(part.text);
                                    historyModel += part.text;
                                } else if ('inlineData' in part && part.inlineData.mimeType.startsWith("image/")) {
                                    const base64Image = part.inlineData.data;
                                    contentHtml += `<img src="data:${part.inlineData.mimeType};base64,${base64Image}" 
                                                alt="Generated Image" style="max-width: 100%; margin-top: 10px;" />`;
                                } else {
                                    contentHtml += `<p>[Unknown content]</p>`;
                                }
                            });
                            conversationContext.push({
                                role: "model",
                                parts: parts
                            });
                            addToConversationHistory({
                                role: "model",
                                parts: parts,
                                chatGrpId: globChatGrpId,
                                timestamp: getCurrentTimeWithAmPm()
                            });
                        } else {
                            contentHtml = '<p>No valid response received.</p>';
                        }
                        var match = false;
                        $('.history-item').each(function () {
                            const chatGrpId = $(this).data('chat-grp-id');
                            if (chatGrpId === globChatGrpId) {
                                match = true;
                                return false;
                            } else {
                                match = false;
                            }
                        });
                        if (!match) {
                            let cleanText = historyModel.replace(/<[^>]*>/g, ''); // Remove HTML tags
                            let first10Words = cleanText.split(/\s+/).slice(0, 10).join(' ');
                            $('.no-history').remove();
                            $('#chat-history').append(`<li class="history-item" onClick=historyClick(this) data-chat-id="histpry-${typingId}" data-chat-grp-id="${globChatGrpId}">
                            <a href="#" class="list-group-item list-group-item-action p-3 rounded-3 border-0">
                                <h6 class="mb-0 text-truncate fs-14">`+ inputText + `</h6>
                                <p class="fs-12 mb-1 text-truncate">${first10Words}</p>
                                <small class="opacity-75 fs-12">${getCurrentTimeWithAmPm()}</small>
                            </a>
                        </li>`);
                        }

                        const receveMessage = `<div class="d-flex gap-2 flex-column flex-md-row">
                            <div class="avatar lg rounded-circle mt-0 mt-md-4 bg-primary text-white p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 4m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                    <path d="M12 2v2" />
                                    <path d="M9 12v9" />
                                    <path d="M15 12v9" />
                                    <path d="M5 16l4 -2" />
                                    <path d="M15 14l4 2" />
                                    <path d="M9 18h6" />
                                    <path d="M10 8v.01" />
                                    <path d="M14 8v.01" />
                                </svg>
                            </div>
                            <div class="ai-reply flex-grow-1 text-wrap">
                                <span class="opacity-50 small">AI Assistant</span>
                                <div class="message py-3 px-4 rounded-4 position-relative me-lg-5 lh-base">
                                    `+ contentHtml + `
                                    <span class="opacity-0 position-absolute small end-0 time">${getCurrentTimeWithAmPm()}</span>
                                </div>
                            </div>
                        </div>`;
                        $(`#${typingId}`).html(receveMessage);
                        $('#send-button').prop('disabled', false);
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', status, error);
                        console.error('API Error:', xhr.responseText || status || error);
                        $(`#${typingId}`).remove();
                        let message = 'Something went wrong.';
                        console.log(xhr.responseJSON.error.message);
                        if (xhr.responseJSON.error.message != undefined && xhr.responseJSON.error.message != "") {
                            message = xhr.responseJSON.error.message;
                        } else {
                            if (xhr.status === 400) {
                                message = 'Bad Request – Check input data.';
                            } else if (xhr.status === 403) {
                                message = 'Forbidden – Invalid API Key.';
                            } else if (xhr.status === 429) {
                                message = 'Rate limit exceeded. Try again later.';
                            } else if (xhr.status >= 500) {
                                message = 'Server error. Please try again later.';
                            } else {
                                message = 'Something went wrong!';
                            }
                        }
                        showErrorMessage(message);
                        $('#send-button').prop('disabled', false);
                    }
                });
            }
        });
        function getCurrentTimeWithAmPm() {
            const now = new Date();

            let hours = now.getHours();
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';

            hours = hours % 12;
            hours = hours ? hours : 12; // convert 0 to 12

            return `${hours}:${minutes}:${seconds} ${ampm}`;
        }
        function showErrorMessage(msg) {
            $('#error-box').html(`<p class="text-danger">${msg}</p>`);
            // setTimeout(() => {
            //     $('#error-box').empty();
            // }, 5000);
        }
        function fileToBase64(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();

                reader.onload = () => {
                    const base64 = reader.result.split(',')[1];
                    resolve(base64);
                };

                reader.onerror = (error) => reject(error);

                if (file instanceof Blob) {
                    reader.readAsDataURL(file);
                } else {
                    reject(new TypeError("File must be a Blob."));
                }
            });
        }

        document.getElementById("remove-image").addEventListener("click", function () {
            const preview = document.getElementById("image-preview");
            preview.src = "";

            const container = document.getElementById("image-preview-container");
            container.classList.add("d-none");

            const input = document.getElementById("chat-file-input");
            input.value = "";
        });
        document.getElementById("chat-file-input").addEventListener("change", function () {
            const file = this.files[0];

            if (file && file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const preview = document.getElementById("image-preview");
                    preview.src = e.target.result;

                    const container = document.getElementById("image-preview-container");
                    container.classList.remove("d-none");
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush