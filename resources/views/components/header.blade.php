<header class="bg-[url('../images/header-bg.png')] bg-no-repeat bg-bottom">
    <div class="max-w-300 mx-auto py-15">
        <div class="flex justify-between items-center max-xl:px-10 max-xl:h-10.5">
            <img src="{{ asset('images/AppLab.png') }}" alt="logo">
            <div class="nav-con">
                <button class="xl:hidden burger">☰</button>
                <nav class="hidden xl:flex gap-10 nav-menu">
                    <ul class="flex items-center gap-7 md:gap-10 nav-list">
                        <li>Home</li>
                        <li>Key Features</li>
                        <li>Pricing</li>
                        <li>Testiminial</li>
                        <li>FAQ</li>
                    </ul>
                    <button class="block h-14 w-42 rounded-4xl bg-primary border border-primary text-white">
                        Try for free
                    </button>
                </nav>
            </div>
        </div>
    </div>

    <div>
        <div class="lg:max-w-270 mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 place-items-center">
                <div
                    class="flex flex-col items-center text-center lg:justify-self-center px-5 md:px-10 lg:pl-2.5 xl:pl-0">
                    <img src="{{ asset('images/editors-choice.png') }}" alt="editors-choice">
                    <p class="text-3xl lg:text-4xl font-semibold leading-12 md:leading-14 lg:leading-18">
                        Best app for your modern lifestyle
                    </p>
                    <p class="text-lg font-normal leading-7 py-9">
                        Increase productivity with a simple to-do app. app for managing your personal budgets.
                    </p>
                    <div class="flex items-center gap-7 max-sm:flex-col">
                        <button class="block h-14 w-42 rounded-4xl bg-primary border border-primary text-white">
                            Try for free
                        </button>
                        <a href="#" class="text-base font-normal leading-11 text-primary">Watch demo video</a>
                    </div>
                </div>
                <div class="lg:justify-self-end">
                    <img src="{{ asset('images/phone-1.png') }}" alt="phone">
                </div>
            </div>
        </div>
    </div>
</header>
