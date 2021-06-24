<div class="container-fluid">


    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar"
            aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dashboardsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-devices_other nav-icon"></i>
                        الرئيسية
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dashboardsDropdown">
                        <li>
                            <a class="dropdown-item" href="index.html">Admin Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="project-dashboard.html">Project Management</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="sales-dashboard.html">Sales Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="crm-dashboard.html">CRM Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="ecommerce-dashboard.html">Ecommerce Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="quick-dashboard.html">Quick Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="smart-dashboard.html">Smart Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="helpdesk-dashboard.html">Help Desk Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="layoutsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Layouts
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="layoutsDropdown">
                                <li>
                                    <a class="dropdown-item" href="default-layout.html">Default Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="default-layout-light.html">Light Color Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="fixed-layout.html">Fixed Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="boxed-layout.html">Boxed Layout</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="card-options.html">Card Options</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="drag-drop-cards.html">Drag and Drop Cards</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-package nav-icon"></i>
                        زيارة الواجهة
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                        <li>
                            <a class="dropdown-item" href="chat.html">Chat App</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="tasks.html">Tasks App</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="documents.html">Documents</a>
                        </li>
                        <li>
                            <a class="dropdown-toggle sub-nav-link" href="#" id="calendarsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Calendars
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="calendarsDropdown">
                                <li>
                                    <a class="dropdown-item" href="calendar.html">Daygrid View</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-external-draggable.html">External
                                        Draggable</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-google.html">Google Calendar</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-list-view.html">List View</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-selectable.html">Selectable</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-week-numbers.html">Week Numbers</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="invoice.html">Invoice</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="contacts.html">Contacts</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="datepickers.html">Datepickers</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="comments.html">Comments</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="timeline.html">Timeline</a>
                        </li>
                    </ul>
                </li>
                @if(can('settings.view'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-book-open nav-icon"></i>
                            الاعدادات
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <li>
                                <a class="dropdown-item" href="{{url('admin/settings')}}">الاعدادات العامة</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('admin/social-settings')}}">اعدادت التواصل</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{url('admin/front-settings')}}">اعدادات الواجهة</a>
                            </li>

                        </ul>
                    </li>
                @endif

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-edit1 nav-icon"></i>
                        الاعضاء
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="formsDropdown">
                        @if(can('users.view'))
                            <li>
                                <a class="dropdown-item" href="{{url('admin/users')}}">الاعضاء</a>
                            </li>
                            @if(can('users.create'))
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/users/create')}}">اضافة عضو جديد</a>
                                </li>
                            @endif
                        @endif
                        @if(can('admins.view'))
                            <li>
                                <a class="dropdown-item" href="{{url('admin/admins')}}">المشرفين</a>
                            </li>
                            @if(can('admins.create'))
                                <li>
                                    <a class="dropdown-item" href="{{url('admin/admins/create')}}">اضافة مشرف جديد</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="formsDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-edit1 nav-icon"></i>
                        الصفحات
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="formsDropdown">

                        <li>
                            <a class="dropdown-item" href="{{url('admin/about-us')}}">من نحن </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{url('admin/conditions')}}">شروط الاشتراك</a>
                        </li>
                    </ul>
                </li>
                @if(can('categories.view'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="layoutsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-layers2 nav-icon"></i>
                        التحكم بالأقسام
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="layoutsDropdown">
                        <li>
                            <a class="dropdown-item" href="{{url('admin/categories')}}">التحكم بالأقسام</a>
                        </li>
                        @if(can('categories.create'))
                        <li>
                            <a class="dropdown-item" href="{{url('admin/categories/create')}}">اضافة قسم جديد</a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-alert-triangle nav-icon"></i>
                        خدمات الموقع
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                        <li>
                            <a class="dropdown-item" href="login.html">الإضافات</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="signup.html">البلاغات</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="forgot-pwd.html">روابط الموقع</a>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="subscribeDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                روابط التواصل الإجتماعى
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="subscribeDropdown">
                                <li>
                                    <a class="dropdown-item" href="subscribe.html">Subscribe</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="subscribe2.html">Subscribe 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="errorDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Error Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="errorDropdown">
                                <li>
                                    <a class="dropdown-item" href="error.html">404</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="error2.html">505</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>




                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-alert-triangle nav-icon"></i>
                        اتصل بنا
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">
                        <li>
                            <a class="dropdown-item" href="login.html">Login</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="signup.html">Signup</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="forgot-pwd.html">Forgot Password</a>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="subscribeDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Subscribe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="subscribeDropdown">
                                <li>
                                    <a class="dropdown-item" href="subscribe.html">Subscribe</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="subscribe2.html">Subscribe 2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="open-left">
                            <a class="dropdown-toggle sub-nav-link" href="#" id="errorDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Error Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="errorDropdown">
                                <li>
                                    <a class="dropdown-item" href="error.html">404</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="error2.html">505</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
    <!-- Navigation end -->
