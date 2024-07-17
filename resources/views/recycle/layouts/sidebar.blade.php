  <div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 custom-sidebar" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="{{ asset('asset/gambar/logosma.png') }}" alt="Logo" width="40" height="40" class="me-2">
        SMK Informatika <!-- Add SMK Informatika text here -->
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
          <i class="fa-solid fa-gauge"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a href="#masterDataCollapse" class="nav-link link-body-emphasis" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="masterDataCollapse">
          <i class="bi bi-database"></i>
            Master data
          </a>
          <div class="collapse" id="masterDataCollapse">
            <ul class="nav flex-column ms-3">
              <li class="nav-item">
                <a href="#" class="nav-link link-body-emphasis">
                  <i class="bi bi-database"></i>
                  contoh 1
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link link-body-emphasis">contoh 2</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link link-body-emphasis">contoh 3</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <i class="bi bi-envelope"></i>
            surat Izin
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
            Products
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-body-emphasis">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
            Customers
          </a>
        </li>
      </ul>
    </div>
    <div class="flex-grow-1 p-3">
      <!-- Main content goes here -->
    </div>
  </div>
