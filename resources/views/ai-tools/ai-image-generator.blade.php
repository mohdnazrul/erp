@extends('ai-tools.layout.app')
@section('page-content')
<!-- Start:: Content -->
    <div class="content-area">
        <div class="container-fluid p-md-0">
            
            <div class="inner-layout d-flex">
                <div class="left-bar p-4 overflow-y-auto">
                    <form id="imageGenerationForm">
                        <h5 class="mb-1">Generate Image</h5>
                        <ul class="row g-2 li_animate list-unstyled mb-0">
                            <li class="col-12 control-group mb-2">
                                <label class="form-label">Prompt</label>
                                <textarea class="form-control" rows="4" name="prompt" id="prompt" placeholder="Describe the image you want to generate..." required=""></textarea>
                                <div class="fs-12 lh-sm">Be specific and descriptive for better results</div>
                            </li>
                            <li class="col-12 control-group">
                                <div class="form-floating">
                                    <select class="form-select" id="style" name="style">
                                        <option value="realistic">Realistic</option>
                                        <option value="artistic">Artistic</option>
                                        <option value="cartoon">Cartoon</option>
                                        <option value="anime">Anime</option>
                                        <option value="abstract">Abstract</option>
                                        <option value="vintage">Vintage</option>
                                    </select>
                                    <label>Style</label>
                                </div>
                            </li>
                            <li class="col-12 control-group">
                                <div class="form-floating">
                                    <select class="form-select" name="aspect_ratio" id="aspect_ratio">
                                        <option value="1:1">Square (1:1)</option>
                                        <option value="16:9">Landscape (16:9)</option>
                                        <option value="9:16">Portrait (9:16)</option>
                                        <option value="4:3">Standard (4:3)</option>
                                    </select>
                                    <label>Aspect Ratio</label>
                                </div>
                            </li>
                            <li class="col-12 control-group">
                                <div class="form-floating">
                                    <select class="form-select" id="quality" name="quality">
                                        <option value="standard">Standard</option>
                                        <option value="hd">HD</option>
                                        <option value="ultra">Ultra HD</option>
                                    </select>
                                    <label>Quality</label>
                                </div>
                            </li>
                            <li class="col-12 control-group mb-2">
                                <div class="form-floating">
                                    <select class="form-select" id="count" name="count">
                                        <option value="1">1 Image</option>
                                        <option value="2">2 Images</option>
                                        <option value="4">4 Images</option>
                                    </select>
                                    <label>Count</label>
                                </div>
                            </li>
                            <li class="col-12">
                                <button type="submit" class="btn btn-primary w-100" id="generateBtn">Generate Image</button>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="body-area d-flex align-items-start flex-column p-md-4 p-2 overflow-y-auto">
                    <div class="align-items-center bg-card d-flex flex-column m-auto p-4 py-5 rounded-4 text-center ai-image-card" id="message-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 8h.01" />
                            <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" />
                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                            <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>
                        <h3 class="mt-4">No Images Generated Yet</h3>
                        <p class="text-muted">Start by entering a prompt and clicking "Generate Image" to create your first AI-generated image.</p>
                    </div>
                    <div class="mt-5 d-none" id="history-div">
                        <h5>Recent Generations</h5>
                        <div class="row g-3" id="history">

                        </div>
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
        function historyClick(el) {
            const chatId = el.dataset.chatId;
            const chatContainer = document.getElementById(chatId);
            chatContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
        function setPrompt(val) {
            $('#prompt').val(val);
        }
        $('.chat-app .chatlist-toggle').on('click', function () {
            $('.chat-app .order-1').toggleClass('open');
        });
        let conversationContext = [];
        $('#imageGenerationForm').on('submit', async  function (e) {
            e.preventDefault();
            $('#message-box').html("");
            const form = e.target;
            const formData = new FormData(form);
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });
            console.log(data);
            const inputText = `
                Prompt: ${data.prompt}
                Style: ${data.style}
                Please generate the image in ${data.aspect_ratio} aspect ratio
                Quality: ${data.quality}
                Count: ${data.count}
                `.trim();
            const parts = [];
            var imageUpload = true;
            parts.push({ text: inputText });
            if(data.prompt != "") {
                $('#send-button').prop('disabled', true);
                var typingId = 'typing-' + Date.now();
                var typingPlaceholder = `
                    <div id="${typingId}" class="mb-3 flex-row align-items-end">
                        <div class="max-width-70">
                            <div class="card p-2">
                                <span class="typing-dots"></span>
                            </div>
                        </div>
                    </div>`;
                $('#message-box').append(typingPlaceholder);    
                const apiKey = window.env.GEMINI_API_KEY;
                var generationConfig = {"responseModalities":["TEXT","IMAGE"]};
                var url = `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash-preview-image-generation:generateContent?key=${apiKey}`;
                conversationContext.push({
                    role: "user",
                    parts: [parts]
                });
                $.ajax({
                    url: url,
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify({
                            contents: conversationContext,
                            generationConfig:generationConfig
                        }),
                    success: function (response) {
                        const parts = response?.candidates?.[0]?.content?.parts;
                        $(`#${typingId}`).html("");
                        if (Array.isArray(parts) && parts.length > 0) {
                            parts.forEach(part => {
                                if ('text' in part) {
                                    if(part.text != ""){
                                        var contentHtml = marked.parse(part.text);
                                        const receveMessage = $('<div class="mb-3 d-flex flex-row align-items-end">')
                                            .append(
                                                $(`<div class="max-width-70 chat-content alert alert-info" id="histpry-${typingId}">`).append(
                                                    $('<div class="card p-3">').append(contentHtml)
                                                )
                                            );
                                        $(`#${typingId}`).append(receveMessage);
                                    }
                                } else if ('inlineData' in part && part.inlineData.mimeType.startsWith("image/")) {
                                    const base64Image = part.inlineData.data;
                                    const mimeType = part.inlineData.mimeType;
                                    const byteCharacters = atob(base64Image);
                                    const byteNumbers = new Array(byteCharacters.length);
                                    for (let i = 0; i < byteCharacters.length; i++) {
                                        byteNumbers[i] = byteCharacters.charCodeAt(i);
                                    }
                                    const byteArray = new Uint8Array(byteNumbers);
                                    const blob = new Blob([byteArray], { type: mimeType });
                                    const downloadUrl = URL.createObjectURL(blob);
                                    $('#history-div').removeClass('d-none');
                                    // Construct the image + icon HTML
                                    const contentHtml = `
                                        <div class="image-wrapper" style="position: relative; display: inline-block;">
                                            <img src="data:${mimeType};base64,${base64Image}" 
                                                alt="Generated Image" 
                                                style="max-width: 100%; border-radius: 8px;" />
                                            <a href="${downloadUrl}" 
                                            download="gemini-generated.png" 
                                            title="Download"
                                            style="
                                                    position: absolute;
                                                    bottom: 8px;
                                                    right: 8px;
                                                    background: rgba(0, 0, 0, 0.6);
                                                    color: white;
                                                    padding: 6px 8px;
                                                    border-radius: 50%;
                                                    font-size: 14px;
                                                    text-decoration: none;
                                                    z-index: 2;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                            </a>
                                        </div>
                                    `;
                                    $('#history').prepend(`
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                            <div class="image-wrapper" style="position: relative; display: inline-block;">
                                                <img class="img-fluid rounded-4" src="data:${mimeType};base64,${base64Image}" alt="">
                                                <a href="${downloadUrl}" 
                                                download="gemini-generated.png" 
                                                title="Download"
                                                style="
                                                        position: absolute;
                                                        bottom: 8px;
                                                        right: 8px;
                                                        background: rgba(0, 0, 0, 0.6);
                                                        color: white;
                                                        padding: 6px 8px;
                                                        border-radius: 50%;
                                                        font-size: 14px;
                                                        text-decoration: none;
                                                        z-index: 2;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                                </a>
                                            </div>
                                        </div>`)
                                    // Create chat bubble
                                    const receveMessage = $('<div class="mb-3 d-flex flex-row align-items-end">')
                                        .append(
                                            $(`<div class="max-width-70 chat-content" id="histpry-${typingId}">`).append(
                                                $('<div class="card p-3">').append(contentHtml)
                                            )
                                        );
                                    // Append to chat
                                    $(`#${typingId}`).append(receveMessage);
                                } else {
                                    var contentHtml = `<p>[Unknown content]</p>`;
                                    const receveMessage = $('<div class="mb-3 d-flex flex-row align-items-end">')
                                        .append(
                                            $(`<div class="max-width-70 chat-content" id="histpry-${typingId}">`).append(
                                                $('<div class="card p-3 bg-body-secondary">').append(contentHtml)
                                            )
                                        );
                                    $(`#${typingId}`).html(receveMessage);
                                }
                            });
                            conversationContext.push({
                                role: "model",
                                parts: parts
                            });
                        } else {
                            contentHtml = '<p>No valid response received.</p>';
                        }
                        $('#send-button').prop('disabled', false);

                    },
                    error: function (xhr, status, error) {
                        $(`#${typingId}`).html("");
                        console.error('API Error:', xhr.responseText || status || error);
                        let message = 'Something went wrong.';
                        if(xhr.responseJSON.error.message != undefined && xhr.responseJSON.error.message != "") {
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
    function showErrorMessage(msg) {
        $('#message-box').html(`
                <p class="text-danger">${msg}</p>
        `);
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
</script>
@endpush