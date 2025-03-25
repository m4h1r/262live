<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>262Live Menü</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <link rel="icon" href="favicon.png" type="image/x-icon"> 
        <link rel="apple-touch-icon" href="favicon.png">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    <body class="bg-gray-800">

        {{-- Nav Start --}}
        <nav class="sticky z-50 -mb-20 bg-gray-800 top-0 absolute w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
            <div class="container mx-auto flex flex-wrap items-center justify-between">
                <div
                class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap text-white" href="{{Route('menu')}}">
                <img class="inline-block h-16" src="/favicon.png" alt="262 Live Logo">
                </a>
                    <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button"
                    onclick="toggleNavbar('collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
                </div>
                <div
                class="lg:flex flex-grow items-center lg:bg-opacity-0 lg:shadow-none hidden"
                id="collapse-navbar">
                <ul
                    class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
            
                    <li class="flex items-center">
                    <a class="text-white lg:hover:text-blueGray-200 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#biralar" onclick="toggleNavbar('collapse-navbar')">Biralar</a>
                    </li>
        
                    <li class="flex items-center">
                    <a class="text-white lg:hover:text-blueGray-200 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#kokteyller" onclick="toggleNavbar('collapse-navbar')">Kokteyller</a>
                    </li>
        
                    <li class="flex items-center">
                    <a class="text-white lg:hover:text-blueGray-200 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#shotlar" onclick="toggleNavbar('collapse-navbar')">Shot'lar</a>
                    </li>
        
                    <li class="flex items-center">
                    <a class="text-white lg:hover:text-blueGray-200 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#extras" onclick="toggleNavbar('collapse-navbar')">Aparatifler</a>
                    </li>
            
                    <li class="flex items-center">
                    <a class="text-white lg:hover:text-blueGray-200 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#ulasim" onclick="toggleNavbar('collapse-navbar')">Ulaşım</a>
                    </li>
            
                    <li class="flex items-center">
                    <a class="text-white lg:hover:text-blueGray-200 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#iletisim" onclick="toggleNavbar('collapse-navbar')">İletişim</a>
                    </li>
            
                </ul>
                </div>
            </div>
        </nav>
        {{-- Nav End --}}
        
        {{-- Body Start --}}
        <div class="text-white pt-32 px-8">
        
        
        
        {{-- Slider Start --}}
        
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
          <!-- Carousel wrapper -->
          <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
               <!-- Item 1 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/assets/img/slider1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="262 Live Pub Görsel 1">
              </div>
              <!-- Item 2 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/assets/img/slider2.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="262 Live Pub Görsel 2">
              </div>
              <!-- Item 3 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/assets/img/slider3.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="262 Live Pub Görsel 3">
              </div>
              <!-- Item 4 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/assets/img/slider4.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="262 Live Pub Görsel 4">
              </div>
              <!-- Item 5 -->
              <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="/assets/img/slider5.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="262 Live Pub Görsel 5">
              </div>
          </div>
          <!-- Slider indicators -->
          <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
              <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
          </div>
          <!-- Slider controls -->
          <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
        </div>
        
        {{-- Slider End --}}
        
        
        
        
        
        
        
        {{-- Beer Start --}}
        <div class="pb-4" id="biralar">
            <h1 class="text-5xl text-center py-2">Biralar</h1>
            <hr class="p-4 text-white">
            <div class="grid gap-2 grid-cols-1 md:grid-cols-2">
        
                @foreach ($drinks as $drink)
                @if ($drink->type=="Bira")
        
                <div class="bg-gray-900 rounded-xl text-white flex overflow-hidden h-48">
                    <div class="col-span-1 w-1/3 flex justify-center">
                      @if ( substr($drink->picture, 0, 4) == "http")
                        <img class="object-fill h-full rounded-xl" src="{{ $drink->picture }}" alt="">
                      @else
                        <img class="object-fill h-full rounded-xl" src="assets/img/{{ $drink->picture }}" alt="">
                      @endif
                    </div>
                    <div class="col-span-2 w-2/3">
                        <h2 class="text-3xl p-2 self-start">{{ $drink->name }}</h2>
                        <h2 class="text-xl p-2 self-start">{{ $drink->brand }}</h2>
                        <p class="text-md p-2 self-start">{{ $drink->description }}</p>
                        <div class="w-full flex justify-end">
                          @if ($drink->stock==1)
                          <p class="px-2 text-xl">{{ $drink->price }}₺</p>
                          @else
                          <p class="px-2 text-xl text-red-500">Tükendi!</p>
                          @endif
                            
                        </div>
                    </div>
                </div>
                    
                @endif
                @endforeach
            </div>
        
        </div>
        {{-- Beer End --}}
        
        {{-- Coctails Start --}}
        <div class="pb-4" id="kokteyller">
          <h1 class="text-5xl text-center py-2">Kokteyller</h1>
          <hr class="p-4 text-white">
          <div class="grid gap-2 grid-cols-1 md:grid-cols-2">
        
              @foreach ($drinks as $drink)
              @if ($drink->type=="Kokteyl")
        
              <div class="bg-gray-900 rounded-xl text-white flex overflow-hidden h-48">
                  <div class="col-span-1 w-1/3 flex justify-center">
                    @if ( substr($drink->picture, 0, 4) == "http")
                      <img class="object-fill h-full rounded-xl" src="{{ $drink->picture }}" alt="">
                    @else
                      <img class="object-fill h-full rounded-xl" src="assets/img/{{ $drink->picture }}" alt="">
                    @endif
                  </div>
                  <div class="col-span-2 w-2/3">
                      <h2 class="text-3xl p-2 self-start">{{ $drink->name }}</h2>
                      <h2 class="text-xl p-2 self-start">{{ $drink->brand }}</h2>
                      <p class="text-md p-2 self-start">{{ $drink->description }}</p>
                      <div class="w-full flex justify-end">
                        @if ($drink->stock==1)
                        <p class="px-2 text-xl">{{ $drink->price }}₺</p>
                        @else
                        <p class="px-2 text-xl text-red-500">Tükendi!</p>
                        @endif
                          
                      </div>
                  </div>
              </div>
                  
              @endif
              @endforeach
          </div>
        
          
        </div>
        {{-- Coctails End --}}
        
        {{-- Shots Start --}}
        <div class="pb-4" id="shotlar">
          <h1 class="text-5xl text-center py-2">Shot'lar</h1>
          <hr class="p-4 text-white">
          <div class="grid gap-2 grid-cols-1 md:grid-cols-2">
        
              @foreach ($drinks as $drink)
              @if ($drink->type=="Shot")
        
              <div class="bg-gray-900 rounded-xl text-white flex overflow-hidden h-48">
                  <div class="col-span-1 w-1/3 flex justify-center">
                  @if ( substr($drink->picture, 0, 4) == "http")
                    <img class="object-fill h-full rounded-xl" src="{{ $drink->picture }}" alt="">
                  @else
                    <img class="object-fill h-full rounded-xl" src="assets/img/{{ $drink->picture }}" alt="">
                  @endif
                  </div>
                  <div class="col-span-2 w-2/3">
                      <h2 class="text-3xl p-2 self-start">{{ $drink->name }}</h2>
                      <h2 class="text-xl p-2 self-start">{{ $drink->brand }}</h2>
                      <p class="text-md p-2 self-start">{{ $drink->description }}</p>
                      <div class="w-full flex justify-end">
                        @if ($drink->stock==1)
                        <p class="px-2 text-xl">{{ $drink->price }}₺</p>
                        @else
                        <p class="px-2 text-xl text-red-500">Tükendi!</p>
                        @endif
                          
                      </div>
                  </div>
              </div>
                  
              @endif
              @endforeach
          </div>
        </div>
        {{-- Shots End --}}
        
        {{-- Extras Start --}}
        <div class="pb-4" id="extras">
          <h1 class="text-5xl text-center py-2">Aperitifler</h1>
          <hr class="p-4 text-white">
          <div class="grid gap-2 grid-cols-1 md:grid-cols-2">
        
              @foreach ($drinks as $drink)
              @if ($drink->type=="Aperitif")
        
              <div class="bg-gray-900 rounded-xl text-white flex overflow-hidden h-48">
                  <div class="col-span-1 w-1/3 flex justify-center">
                    @if ( substr($drink->picture, 0, 4) == "http")
                      <img class="object-fill h-full rounded-xl" src="{{ $drink->picture }}" alt="">
                    @else
                      <img class="object-fill h-full rounded-xl" src="assets/img/{{ $drink->picture }}" alt="">
                    @endif
                  </div>
                  <div class="col-span-2 w-2/3">
                      <h2 class="text-3xl p-2 self-start">{{ $drink->name }}</h2>
                      <h2 class="text-xl p-2 self-start">{{ $drink->brand }}</h2>
                      <p class="text-md p-2 self-start">{{ $drink->description }}</p>
                      <div class="w-full flex justify-end">
                        @if ($drink->stock==1)
                        <p class="px-2 text-xl">{{ $drink->price }}₺</p>
                        @else
                        <p class="px-2 text-xl text-red-500">Tükendi!</p>
                        @endif
                          
                      </div>
                  </div>
              </div>
                  
              @endif
              @endforeach
          </div>
        </div>
        {{-- Extras End --}}
        
        
        {{-- Ulaşım Start --}}
        <div class="pb-4" id="ulasim">
            <h1 class="text-5xl text-center">Ulaşım</h1>
            <hr class="p-4 text-white">
        
            <iframe class="mx-auto max-w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.978251601907!2d29.922012775719313!3d40.762503071385986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cb45817e6c33d1%3A0x2a76c251122ba43d!2s262%20Live%20Bar!5e0!3m2!1str!2str!4v1695324807895!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        {{-- Ulaşım End --}}
        
        {{-- İletişim Start --}}
        <div class="pb-4" id="iletisim">
            <h1 class="text-5xl text-center">İletişim</h1>
            <hr class="p-4 text-white">
        </div>
        {{-- İletişim End --}}
        
        </div>
        {{-- Body End --}}
        
        
        {{-- Footer Start  --}}
        <footer class="relative pt-4 pb-6 w-full text-center">
          
              <div class="flex flex-wrap text-center">
                <div class="w-full">
                  <div class="mt-6 lg:mb-0">
        
                    <button class="bg-white text-green-400 shadow-sm hover:shadow-lg font-normal h-12 sm:h-16 w-12 sm:w-16 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                      <a href="https://wa.me/905342664183?text=Rezervasyon%20bilgisi%20alabilir%20miyim?" target="_blank">
                        <i class="fab fa-whatsapp fa-2x"></i>
                      </a>
                    </button>
        
                    {{-- <button class="bg-white text-lightBlue-400 shadow-sm hover:shadow-lg font-normal h-12 sm:h-16 w-12 sm:w-16 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                      <a href="https://twitter.com/mahiryildizhan" target="_blank">
                        <i class="fab fa-twitter fa-2x"></i>
                      </a>
                    </button> --}}
        
                    {{-- <button class="bg-white text-red-500 shadow-sm hover:shadow-lg font-normal h-12 sm:h-16 w-12 sm:w-16 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                      <a href="https://www.youtube.com/channel/UCzSIjra8EKWS6fIJfNjTQIw" target="_blank">
                        <i class="fab fa-youtube fa-2x"></i>
                      </a>
                    </button> --}}
        
                    <button class="bg-white text-red-500 shadow-sm hover:shadow-lg font-normal h-12 sm:h-16 w-12 sm:w-16 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                      <a href="https://www.instagram.com/262live/" target="_blank">
                        <i class="fab fa-instagram fa-2x"></i>
                      </a>
                    </button>
                  </div>
        
                </div>
        
              </div>
              <hr class="my-6 border-white" />
              <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 mx-auto text-center">
                  <div class="text-sm text-blueGray-500 font-semibold py-1">
                    Bu site <a class="text-blue-500" target="_blank" href="https://myteknoloji.com/">MY Teknoloji</a> © Tarafından yapılmıştır.
                    <br>
                    2022 - {{\Carbon\Carbon::now()->format('Y');}}, Tüm Hakları Saklıdır.
                  </div>
                </div>
              </div>
          </footer>
          {{-- Footer End --}}
        
        
        </body>
        
            <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
          <script>
            /* Make dynamic date appear */
            (function () {
              if (document.getElementById("get-current-year")) {
                document.getElementById(
                  "get-current-year"
                ).innerHTML = new Date().getFullYear();
              }
            })();
            /* Function for opning navbar on mobile */
            function toggleNavbar(collapseID) {
              document.getElementById(collapseID).classList.toggle("hidden");
              document.getElementById(collapseID).classList.toggle("block");
            }
            /* Function for dropdowns */
            function openDropdown(event, dropdownID) {
              let element = event.target;
              while (element.nodeName !== "A") {
                element = element.parentNode;
              }
              Popper.createPopper(element, document.getElementById(dropdownID), {
                placement: "bottom-start",
              });
              document.getElementById(dropdownID).classList.toggle("hidden");
              document.getElementById(dropdownID).classList.toggle("block");
            }
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</html>
