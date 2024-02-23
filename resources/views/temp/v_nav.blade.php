<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Home
    
              </p>
            </a>
            @if (auth()->user()->level == '1')
            </li>
            <li class="nav-item has-treeview">
            <a href="{{route('user')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               User
              </p>
            </a>
            <li class="nav-item has-treeview">
            <a href="{{route('addverifikasi')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Pengajuan
    
              </p>
            </a>
            </li>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{route('barcode')}}" class="nav-link">
              <i class="nav-icon fas fa-barcode"></i>
              <p>
               Diterima
    
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{route('surat')}}" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
               Jenis Surat
    
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{route('verifikasi')}}" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
               Tabel Pengajuan
    
              </p>
            </a>
            </li>
            @elseif (auth()->user()->level == '3')
            <li class="nav-item has-treeview">
            <a href="{{route('addverifikasi')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Pengajuan
    
              </p>
            </a>
           
            <li class="nav-item has-treeview">
            <a href="{{route('verifikasi')}}" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
               Tabel Pengajuan
    
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="{{route('barcode')}}" class="nav-link">
              <i class="nav-icon fas fa-barcode"></i>
              <p>
               Diterima
    
              </p>
            </a>
            </li>
            <li class="nav-item has-treeview">
            <a href="https://drive.google.com/file/d/1aO9HtSGpHhpPYXiKsb2IiWLET8SzxEBg/view?usp=sharing" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Manual Book
    
              </p>
            </a>
            </li>
            @elseif (auth()->user()->level == '2')
            <li class="nav-item has-treeview">
            <a href="{{route('verifikasi')}}" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
               Tabel Pengajuan
    
              </p>
            </a>
            </li>
            @endif
            
            
                          
  </ul>
      </nav>