<!-- Start:: Sidebar -->
<aside class="left-sidebar border-end z-2">
    <nav class="nav-sidebar">
        <ul class="list-unstyled mb-0">
            <li>
                <a class="d-flex align-items-center justify-content-between hover-svg">
                    <span class="nav-title fs-18 fw-medium">AI Tools</span>
                </a>
                <div>
                    <ul class="nav flex-column li_animate">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('ai-chat') ? 'active' : '' }}" href="{{ route('ai-chat') }}">
                                AI Chat Assistant
                                <p class="mb-0 fs-12 gemini-ai text-muted">
                                    Powered by <span class="gemini-text fw-bold">Gemini AI</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('ai-finder') ? 'active' : '' }}" href="{{ route('ai-finder') }}">AI.TLD Finder</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('ai-writer') ? 'active' : '' }}" href="{{ route('ai-writer') }}">AI Writer Studio</a></li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('ai-image-generator') ? 'active' : '' }}" href="{{ route('ai-image-generator') }}">
                                AI Image Generator
                                <p class="mb-0 fs-12 gemini-ai text-muted">
                                    Powered by <span class="gemini-text fw-bold">Gemini AI</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('ai-modules') ? 'active' : '' }}" href="{{ route('ai-modules') }}">AI Models</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('ai-tool-library') ? 'active' : '' }}" href="{{ route('ai-tool-library') }}">AI Tools Library</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</aside>
<div class="sidebar-overlay"></div>
<!-- End:: Sidebar -->