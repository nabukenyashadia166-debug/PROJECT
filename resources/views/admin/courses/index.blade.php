
@extends('layouts.main')
@section('content')

    <!-- Start: Header -->
@include('layouts.header')
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 -translate-x-full peer-checked:translate-x-0 sm:translate-x-0 bg-white border-r border-slate-200 flex flex-col">
        <div class="flex-1 px-3 py-4 overflow-y-auto sidebar-scrollbar">
            <div class="space-y-1 mb-5"><p class="px-3 text-xs font-semibold text-slate-400 uppercase mb-2">Main</p><a href="../../admin/dashboard.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="layout-dashboard" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">Dashboard</span></a><a href="../../requests/index.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="clipboard-list" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">All tickets</span></a><a href="../../notifications.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="bell" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">Notifications</span></a></div><div class="space-y-1 mb-5"><p class="px-3 text-xs font-semibold text-slate-400 uppercase mb-2">Administration</p><a href="../../admin/departments/index.html" class="sidebar-item active border-l-3 border-[#2563eb] bg-blue-50 text-[#2563eb] flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="building-2" class="w-5 h-5 text-[#2563eb] group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">Departments</span></a><a href="../../admin/categories/index.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="tags" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">Categories</span></a><a href="../../admin/users/index.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="users" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">People</span></a></div><div class="space-y-1 mb-5"><p class="px-3 text-xs font-semibold text-slate-400 uppercase mb-2">Account</p><a href="../../profile.html" class="sidebar-item border-l-3 border-transparent text-slate-500 flex items-center p-2 rounded-lg hover:bg-slate-50 hover:text-slate-900 group text-sm transition-all duration-200 pl-3"><i data-lucide="user-cog" class="w-5 h-5 text-slate-400 group-hover:text-[#2563eb] transition-colors"></i><span class="ms-3 text-sm font-medium">My Account</span></a></div>
        </div>
        <!-- Start: Sidebar user card -->
        <div class="mt-auto border-t border-slate-200 p-4">
            <div class="flex items-center space-x-3 mb-3">
                <div class="relative">
                    <div class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center bg-white text-sm font-semibold text-[#2563eb]">JT</div>
                    <div class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-slate-900 truncate">Joy Tiko</p>
                    <p class="text-xs text-slate-500 truncate">joy.tiko@campus.ac.ug</p>
                </div>
            </div>
            <div class="flex items-center gap-2 px-3 py-2 bg-white rounded-lg border border-slate-200">
                <i data-lucide="shield" class="w-4 h-4 text-[#2563eb]"></i>
                <span class="text-xs font-semibold text-slate-800 uppercase tracking-wide">Administrator</span>
            </div>
        </div>
        <!-- End: Sidebar user card -->
    </aside>
    <!-- End: Sidebar -->

    <!-- Start: Main content -->
    <div class="pt-16 sm:pl-64 min-h-screen flex flex-col">
        <main class="flex-1 pb-8 px-4 sm:px-8 lg:px-10 pt-6">

            <!-- Start: Page heading -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                <div>
                    <h1 class="text-xl font-semibold">Departments</h1>
                    <p class="text-sm text-slate-500 mt-1">Departments that receive requests. Add one if a new unit starts using the helpdesk.</p>
                </div>
                <a href="create.html" class="inline-flex items-center px-4 py-2 bg-[#2563eb] rounded-lg text-sm font-medium text-white hover:bg-[#1d4ed8]"><i data-lucide="plus" class="w-4 h-4 mr-2"></i>Add department</a>
            </div>
            <!-- End: Page heading -->

            <!-- Start: Departments table -->
            <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-slate-200 bg-slate-50">
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Name</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Description</th>
                            <th class="py-3 px-4 text-left text-sm font-semibold text-slate-500">Categories</th>
                            <th class="py-3 px-4 text-center text-sm font-semibold text-slate-500">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Estates</td><td class="py-3 px-4 text-sm text-slate-500">Leaks, lights, and furniture</td><td class="py-3 px-4 text-sm">4</td><td class="py-3 px-4 text-center"><a href="edit.html" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">ICT Support</td><td class="py-3 px-4 text-sm text-slate-500">Network, AV, accounts, hardware</td><td class="py-3 px-4 text-sm">4</td><td class="py-3 px-4 text-center"><a href="edit.html" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Halls</td><td class="py-3 px-4 text-sm text-slate-500">Lecture halls, labs, event spaces</td><td class="py-3 px-4 text-sm">3</td><td class="py-3 px-4 text-center"><a href="edit.html" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="border-b border-slate-200 hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Hostels</td><td class="py-3 px-4 text-sm text-slate-500">Residential blocks and sanitation</td><td class="py-3 px-4 text-sm">3</td><td class="py-3 px-4 text-center"><a href="edit.html" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                        <tr class="hover:bg-slate-50"><td class="py-3 px-4 text-sm font-medium">Administration</td><td class="py-3 px-4 text-sm text-slate-500">Appointments and document requests</td><td class="py-3 px-4 text-sm">2</td><td class="py-3 px-4 text-center"><a href="edit.html" class="text-[#2563eb]"><i data-lucide="edit" class="w-4 h-4 inline"></i></a></td></tr>
                    </tbody>
                </table>
            </div>
            <!-- End: Departments table -->

        </main>
        <!-- Start: Footer -->
      @include('layouts.footer')
        <!-- End: Footer -->
    </div>
    <!-- End: Main content -->

   @endsection
