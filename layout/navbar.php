<!-- Sidebar -->
<aside class="relative bg-white h-screen w-64 hidden sm:block shadow-xl z-30">
    <div class="p-6">
        <a href="/admin/dashboard" class="text-gray-300 text-3xl font-semibold uppercase hover:text-gray-300">
            <img src="/public/images/logo-black.png">
        </a>
    </div>
    <nav class="text-gray-500 text-base font-semibold">
        <a href="/admin/dashboard" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="/admin/property-list" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-4 pl-6 nav-item">
            <i class="fas fa-place-of-worship mr-3"></i>
            Property List
        </a>
        <!-- /admin/leads-list -->
        <a href="leads-list" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-4 pl-6 nav-item">
            <i class="fas fa-school mr-3"></i>
            Leads
        </a>
        <!-- /admin/blog-list -->
        <a href="/admin/blog-list" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-4 pl-6 nav-item">
            <i class="fas fa-newspaper mr-3"></i>
            Blog
        </a>
        <div class="collapse collapse-arrow">
            <input type="checkbox">
            <div class="collapse-title hover:bg-bvr21 hover:text-bvr30 flex items-center py-4 pl-6 nav-item">
                <i class="fas fa-user-cog mr-3"></i>
                Administrator
            </div>
            <div class="collapse-content p-0">
            <!-- /admin/user-list -->
                <a href="#" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-2 pl-14 nav-item">
                    User
                </a>
                <!-- /admin/currency -->
                <a href="#" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-2 pl-14 nav-item">
                    Currency
                </a>
                <!-- /admin/announcement -->
                <a href="#" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-2 pl-14 nav-item">
                    Announcement
                </a>
                .
            </div>
        </div>
    </nav>
</aside>

<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
            <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
            <i class="fas fa-user-cog"></i>
            <!-- <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80"> -->
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
            <p class="block px-4 py-2 account-link hover:text-bvr20"><?php
                echo $_SESSION['username'];
                 ?></p>
                <a href="/admin/logout.php" class="block px-4 py-2 account-link hover:text-bvr20">Sign Out</a>
            </div>
        </div>
    </header>

    <!-- Mobile Header & Nav -->
    <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden bg-white">
        <div class="flex items-center justify-between">
            <a href="admin/dashboard" class="text-gray-500 text-3xl font-semibold uppercase hover:text-gray-700">
                <img src="/public/images/logo-black.png" class="w-1/2">
            </a>
            <button @click="isOpen = !isOpen" class="bg-white text-bvr20 text-3xl focus:outline-none">
                <i x-show="!isOpen" class="fas fa-bars"></i>
                <i x-show="isOpen" class="fas fa-times"></i>
            </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4 z-30 text-bvr20">
            <a href="admin/dashboard" class="flex items-center py-2 pl-4">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="/admin/property-list" class="flex items-center py-2 pl-4">
                <i class="fas fa-place-of-worship mr-3"></i>
                Property List
            </a>
            <!-- /admin/leads-list -->
            <a href="#" class="flex items-center py-2 pl-4">
                <i class="fas fa-school mr-3"></i>
                Leads
            </a>
            <!-- /admin/blog-list -->
            <a href="#" class="flex items-center py-2 pl-4">
                <i class="fas fa-newspaper mr-3"></i>
                Blog
            </a>
            <div class="collapse collapse-arrow">
                <input type="checkbox">
                <div class="collapse-title hover:bg-bvr21 hover:text-bvr30 flex items-center nav-item">
                    <i class="fas fa-user-cog mr-3"></i>
                    Administrator
                </div>
                <div class="collapse-content p-0">
                <!-- /admin/user-list -->
                    <a href="#" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-2 pl-14 nav-item">
                        User
                    </a>
                    <!-- /admin/currency -->
                    <a href="#" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-2 pl-14 nav-item">
                        Currency
                    </a>
                    <!-- /admin/announcement -->
                    <a href="#" class="hover:bg-bvr21 hover:text-bvr30 flex items-center py-2 pl-14 nav-item">
                        Announcement
                    </a>
                    .
                </div>
            </div>
            <a href="/admin/logout.php" class="flex items-center py-2 pl-4 nav-item">
            <?php
                echo $_SESSION['username'];
                 ?>
                <i class="fas fa-sign-out-alt mr-3"></i>
                Sign Out
            </a>
        </nav>
        <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
    </header>