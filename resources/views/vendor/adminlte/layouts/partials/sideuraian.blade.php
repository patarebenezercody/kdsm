<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar ">

    <!-- sidebar: style can be found in sidebar.less -->
    
    <section class="sidebar">
        <div class=" nav-pills nav-stacked" data-spy="affix" data-offset-top="0">
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        
        
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('MENU') }}</li>

            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-data'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <li><a href="{{ url('balita') }}"><i class='fa fa-data'></i> <span>{{ trans('Balita') }}</span></a></li>

            <li><a href="{{ url('bilal') }}"><i class='fa fa-data'></i> <span>{{ trans('Bilal') }}</span></a></li>

            <li><a href="{{ url('ibuhamil') }}"><i class='fa fa-data'></i> <span>{{ trans('Ibu Hamil') }}</span></a></li>

            <li><a href="{{ url('pengurus') }}"><i class='fa fa-data'></i> <span>{{ trans('Pengurus') }}</span></a></li>

            <li><a href="{{ url('partisipasi') }}"><i class='fa fa-data'></i> <span>{{ trans('Partisipasi') }}</span></a></li>

            <li class="active"><a href="{{ url('uraian') }}"><i class='fa fa-data'></i> <span>{{ trans('Uraian') }}</span></a></li>

            <li><a href="{{ url('lansia') }}"><i class='fa fa-data'></i> <span>{{ trans('Lansia') }}</span></a></li>
            
        </ul><!-- /.sidebar-menu -->
        </div>
    </section>
    <!-- /.sidebar -->
</aside>
