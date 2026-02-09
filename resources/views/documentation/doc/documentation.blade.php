@extends('documentation.layout.app')
@push('style')

@endpush
@section('page-content')
    <div class="row g-3">
        <div class="col-12">
            <section class="border-bottom py-lg-4 mb-4">
                <h3>Welcome to Thunder AI Dashboard</h3>
                <p class="lead lh-base">Welcome to Thunder AI Admin Dashboard, a modern, clean, and highly customizable AI Kit Admin Dashboard Template built using Bootstrap 5, HTML, and powerful CSS variables. Designed for AI-centric admin panels, it comes with multiple layouts, themes, and essential modules to accelerate your dashboard development.</p>
            </section>
        </div>
        <div class="col-12 col-lg-8">
            <section>
                <h3 class="fs-5">📦 Introduction</h3>
                <p class="lead lh-base">This guide will walk you through getting set up and using the key features of the theme, including how to compile the source, understand the file structure, and work with the build tools. If you run into any questions along the way, don’t hesitate to reach out to us!</p>
            </section>
    
            <section class="pt-5">
                <h3 class="fs-5">🛠️ How to Set Up the Project</h3>
                <div class="bg-card p-lg-5 p-4 rounded-4">
                    <p class="lead">✅ Option 1: Open Directly in Browser</p>
                    <ol class="lh-lg mb-4">
                        <li>Unzip the downloaded folder.</li>
                        <li>Open <code class="text-danger">index.html</code> in your browser.</li>
                        <li>Done! 🎉</li>
                    </ol>
                    <p class="lead mb-1">✅ Option 2: Use a Local Development Server (Recommended)</p>
                    <p>If you're working in a development environment:</p>
                    <ol class="lh-lg mb-0">
                        <li>Open the folder in VS Code or any editor.</li>
                        <li>Install Live Server extension (VS Code).</li>
                        <li>Right-click on <code class="text-danger">index.html</code> → "Open with Live Server".</li>
                        <li>The dashboard will run at <code class="text-danger">http://localhost:5500</code> (or similar).</li>
                    </ol>
                </div>
            </section>
            <section class="pt-5">
                <h3 class="fs-5">🔧 Setup AI for API Integration</h3>
                <p>Follow these steps to configure your API key for the Thunder AI Admin Dashboard Template:</p>
                <ul>
                    <li>
                        <h5>1. ✅ Rename the Environment File</h5>
                        <p>Locate the example file in your project directory and rename it from:</p>
                        <div class="bg-card mb-2 p-4 rounded-4">
                            <code class="text-danger mb-3">html/assets/js/env.js.example</code>
                            <br>to:<br>
                            <code class="text-danger mb-3">html/assets/js/env.js</code>
                        </div>
                        <p>This will activate the environment configuration used by the dashboard.</p>
                    </li>
                    <li class="mt-4">
                        <h5>2. 🔑 Set Your Actual API Key</h5>
                        <p>Open the newly renamed file env.js in your preferred code editor.</p>
                        <p>Find the placeholder key and replace it with your actual Gemini API key:</p>
                        <a class="btn btn-dark rounded-pill px-3" href="https://ai.google.dev/gemini-api/docs/quickstart" rel="noreferrer" target="_blank">Create your Gemini API key Here</a>
                        <div class="bg-card my-2 p-4 rounded-4">
                            <code class="text-danger mb-3">GEMINI_API_KEY = "your_actual_api_key_here";</code>
                        </div>
                        <p>Make sure to keep your API key confidential and never expose it in public repositories.</p>
                    </li>
                </ul>
            </section>
    
            <section class="pt-5">
                <h3 class="fs-5">🎨 Customizing the Theme</h3>
                <p class="lead lh-base">Our dashboard uses CSS Variables for colors, spacing, and typography, making customization super easy.</p>
                <h6>🔧 Change Theme Colors</h6>
                <p class="mb-1">Open:</p>
                <div class="bg-card p-lg-5 p-4 rounded-4 mb-3">
                    <code class="text-danger">/assets/css/theme.css</code>
                </div>
                <p class="mb-1">Edit CSS variables:</p>
                <div class="bg-card p-lg-5 p-4 rounded-4 mb-3">
                    <pre data-lang="html"><code class=" language-html">
                    [data-thunderal="theme-indigo"] {
                        --bs-primary: #6C50BF;
                        --bs-primary-rgb: 108, 80, 191;
                        --bs-primary-bg-subtle: #BABDFD;
                        --bs-btn-bg: #6C50BF;
                        --bs-pagination-color: var(--bs-primary);
                        --bs-pagination-active-bg: var(--bs-primary);
                        --bs-nav-pills-link-active-bg: #6C50BF;

                        --primary-gradient: linear-gradient(-45deg, var(--primary-color), var(--secondary-color));   
                    }
                    </code></pre>
                </div>
                <h6>🔤 Change Google Font</h6>
                <p class="mb-1">Switch between 4 pre-set fonts via the settings UI or update Class in <code class="text-danger">body class=""</code></p>
                <div class="bg-card p-lg-5 p-4 rounded-4 mb-3">
                    <code class="text-danger mb-3">/assets/css/style.css</code><br><br>
                    <code class="text-danger">@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');</code>
                    <code class="text-danger">@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');</code>
                    <code class="text-danger">@import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap');</code>
                    <code class="text-danger">@import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');</code>
                </div>
                <h6>🟦 Border Radius</h6>
                <p>Apply or remove border radius site-wide from settings <code class="text-danger">body class="radius-0"</code></p>
            </section>
    
            <section class="pt-5">
                <h3 class="fs-5">📁 Folder Structure</h3>
                <p>Here’s a breakdown of the file structure in Thunder AI:</p>
                <ul class="mb-0 lh-lg">
                    <li>
                        📁 <code class="text-danger">assets</code>: The source files for the theme.
                        <ul>
                            <li><code class="text-danger">css</code>: Custom css and framework css (Bootstrap)</li>
                            <li><code class="text-danger">images</code>: Image assets.</li>
                            <li><code class="text-danger">js</code>: JavaScript source files.</li>
                            <li><code class="text-danger">plugins</code>: third party plugins js files.</li>
                        </ul>
                    </li>
                    <li><code class="text-danger">index.html</code></li>
                    <li><code class="text-danger">LICENSE.md</code>: Theme license.</li>
                    <li><code class="text-danger">README.md</code>: Theme overview.</li>
                </ul>
            </section>
    
            <section class="pt-5">
                <h3 class="fs-5">🧩 Components & Utilities</h3>
                <p>We've included a set of reusable UI components:</p>
                <ul class="lh-base">
                    <li>Accordion, Avatar, Buttons, Badges, Cards, Dropdowns, Modals and more...</li>
                    <li>Tables, Forms, Alerts</li>
                    <li>Sidebar, Topbar, Footer</li>
                    <li>Widgets, Charts, and necessary plugin for dashboard design</li>
                </ul>
                <p>Each component is built with Bootstrap 5 classes and additional utility classes to make the layout responsive and flexible.</p>
            </section>
            
            <section class="pt-5">
                <h3 class="fs-5">🧰 Prerequisites</h3>
                <p>To run the dashboard locally, you’ll need:</p>
                <ul class="lh-base">
                    <li>A modern browser (Chrome, Firefox, Safari, Edge)</li>
                    <li>Code editor (VS Code recommended)</li>
                    <li>Local server (optional: Live Server extension in VS Code)</li>
                </ul>
            </section>
            
            <section class="pt-5">
                <h3 class="fs-5">📦 Dependencies</h3>
                <ul class="lh-base">
                    <li><a href="https://getbootstrap.com/" rel="noreferrer">Bootstrap 5</a></li>
                    <li>jQuery</li>
                </ul>
                <p>You can find CDN links inside the <code class="text-danger">index.html</code> or locally in <code class="text-danger">assets/</code>.</p>
            </section>
            
            <section class="pt-5">
                <h3 class="fs-5">❓Frequently Asked Questions (FAQs)</h3>
                <div class="bg-card p-lg-5 p-4 rounded-4 mb-3">
                    <h6 class="h5">1. Is this dashboard responsive?</h6>
                    <p class="lead lh-base mb-4">Yes. It's 100% responsive and mobile-friendly using Bootstrap Grid and CSS Flexbox.</p>
                    <h6 class="h5">2. Can I integrate this with a backend like Laravel, React, etc.?</h6>
                    <p class="lead lh-base mb-4">Absolutely. The HTML structure is clean and ready for integration into any framework.</p>
                    <h6 class="h5">3. How do I update colors or fonts globally?</h6>
                    <p class="lead lh-base">Edit the CSS variables in <code class="text-danger">/assets/css/theme.css.</code></p>
                </div>
            </section>

            <section class="pt-5">
                <h3 class="fs-5">✅ Final Notes</h3>
                <p class="lead lh-base">Once again, thank you so much for purchasing this template. As I said at the beginning, I'd be glad to help you if you have any questions relating to this template. We hope it makes your project powerful, fast, and easy to manage.</p>
                <p class="lead lh-base">Don't forget to rate us ⭐⭐⭐⭐⭐ on <a target="_blank" class="fw-bold text-primary" href="https://themeforest.net/downloads" rel="noreferrer">ThemeForest</a> if you like the template!</p>
            </section>
        </div>
        <div class="col-12 col-lg-4">
            <div class="ps-lg-4 ms-lg-4 border-start">
                <h6 class="fw-bold">On this page</h6>
                <ul class="lh-lg list-unstyled">
                    <li>📦 Introduction</li>
                    <li>🛠️ How to Set Up the Project</li>
                    <li>🔧 Setup AI for API Integration</li>
                    <li>🎨 Customizing the Theme</li>
                    <li>🔤 Change Google Font</li>
                    <li>🟦 Border Radius</li>
                    <li>📁 Folder Structure</li>
                    <li>🧩 Components & Utilities</li>
                    <li>🧰 Prerequisites</li>
                    <li>📦 Dependencies</li>
                    <li>❓Frequently Asked Questions (FAQs)</li>
                    <li>✅ Final Notes</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    
@endpush