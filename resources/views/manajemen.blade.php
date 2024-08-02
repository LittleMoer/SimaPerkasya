
@section('manajemen_akun')
<section class="section-py first-section-pt help-center-header position-relative overflow-hidden">
  <img class="banner-bg-img" src="{{ asset('sneat/assets/img/sima/header.png') }}" alt="Help center header">
  <h3 class="text-center">Manajemen Akun </h3>
  <h5 class="text-center px-3 mb-0">Pemantauan, pembuatan akun</h5>
</section>

<!-- Manajemen Akun: Start -->
<section id="landingFunFacts">
  <!-- DataTable with Buttons -->
  <div class="row">
    <div class="col-xl-12">
      <div class="nav-align-top">
        <ul class="nav nav-tabs nav-fill" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active " role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-akun" aria-controls="navs-justified-akun" aria-selected="true">
              <i class="tf-icons bx bx-user"></i> Akun
            </button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-generate" aria-controls="navs-justified-generate" aria-selected="false">
              <i class="tf-icons bx bxs-user-plus"></i> Generate Akun
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="navs-justified-akun" role="tabpanel">
            <div class="card-datatable table-responsive">
              <table id="accountTable" class="datatables-basic table border-top">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->username }}</td>
                          <td class="role-id">{{ $user->role_id }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                              <button class="btn btn-warning btn-sm edit-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBackdrop" aria-controls="offcanvasBackdrop" data-name="{{ $user->name }}" data-email="{{ $user->email }}"  data-role="{{ $user->role_id  }}"  >Edit</button>                              
                              <button class="btn btn-danger btn-sm">Delete</button>
                          </td>
                      </tr>

                  @endforeach
                  
                  </tbody>
              </table>
            </div>
          </div>
  
          <div class="tab-pane fade" id="navs-justified-generate" role="tabpanel">
            <div class="col-xxl">
              <div class="card mb-4">
                <div class="card-body">
                  <form method="POST" action="{{ route('manajemen_akun') }}">
                    @csrf
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="name">Nama</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                          <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="username">Username</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                          <input type="text" class="form-control" name="username" id="username" placeholder="JohnDoe" aria-label="JohnDoe" aria-describedby="basic-icon-default-fullname2" />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="role_id">Role</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user-pin"></i></span>
                          <select class="form-select" id="role_id" name="role_id" required>
                            <option value="">-- Pilih Role --</option>
                            <option value="2">Admin</option>
                            <option value="3">Viewer</option>
                            <option value="4">Crew</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="email">Email</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                          <input type="text" name="email" id="email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                          <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span>
                        </div>
                      </div>
                    </div>
                    {{-- <div class="row mb-3">
                      <label class="col-sm-2 form-label" for="basic-icon-default-phone">No Hp</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                          <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                        </div>
                      </div>
                    </div> --}}
                    <div class="row mb-3">
                      <label class="col-sm-2 form-label" for="password">Password</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-password2" class="input-group-text"><i class="bx bx-key"></i></span>
                          <input type="password" id="password" class="form-control password-mask" name="password" placeholder="password" aria-label="password" aria-describedby="basic-icon-default-password2" />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 form-label" for="password_confirmation">Confirm Password</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-password2" class="input-group-text"><i class="bx bx-key"></i></span>
                          <input type="password" id="password_confirmation" class="form-control password-mask" name="password_confirmation" placeholder="password" aria-label="password" aria-describedby="basic-icon-default-password2" />
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ DataTable with Buttons -->
</section>

<!-- Manajemen Akun: End -->

<!-- Help Area: Start -->
<section class="section-py bg-body">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 text-center">
        <h3>Terdapat Kendala?</h3>
        <p class="mb-3">Hubungi jika terdapat kendala dalam sistem ini.<br />Hubungi kami selama jam kerja atau kirim email kapan saja, dan kami akan merespon secepat mungkin.</p>
        <div class="d-flex justify-content-center flex-wrap gap-3">
          <a href="javascript:void(0);" class="btn btn-primary">Email</a>
          <a href="javascript:void(0);" class="btn btn-primary">WhatsApp</a>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $(document).ready(function() {
    $('#accountTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "pageLength": 5, // Jumlah baris per halaman
      "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]] // Opsi jumlah baris per halaman
    });
  });
</script>
<script>
  $(document).ready(function() {
      $('#accountTable').DataTable();

      // Map role_id to role_name
      const roleMap = {
          1: 'Pemilik',
          2: 'Admin',
          3: 'Karyawan'
      };

      // Change role_id to role_name
      $('.role-id').each(function() {
          const roleId = $(this).text().trim();
          const roleName = roleMap[roleId] || 'Unknown';
          $(this).text(roleName);
      });
  });
</script>
<!-- Help Area: End -->
@endsection

@include('main_owner')

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBackdrop" aria-labelledby="offcanvasBackdropLabel">
  <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasBackdropLabel">Edit User</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
      <form id="editUserForm"  method="POST">
          @csrf
          <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="name">Name</label>
              <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                      <input type="text" class="form-control" name="name" id="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                  </div>
              </div>
          </div>
          <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="email">Email</label>
              <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                      <input type="text" name="email" id="email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                  </div>
              </div>
          </div>
          <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="role_id">Role</label>
              <div class="col-sm-10">
                  <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user-pin"></i></span>
                      <select class="form-select" id="role_id" name="role_id" required>
                          <option value="">-- Pilih Role --</option>
                          <option value="2">Admin</option>
                          <option value="3">Karyawan</option>
                          <option value="4">Crew</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2">
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </div>
      </form>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const editButtons = document.querySelectorAll('.edit-btn');
      const form = document.getElementById('editUserForm');
      
      editButtons.forEach(button => {
          button.addEventListener('click', function () {
              const name = this.getAttribute('data-name');
              const email = this.getAttribute('data-email');
              const role = this.getAttribute('data-role');
              const username = this.getAttribute('data-username');
  
              // Mengisi form dengan data dari tabel
              form.querySelector('#name').value = name;
              form.querySelector('#email').value = email;
              form.querySelector('#role_id').value = role;
              form.querySelector('#username').value = username;
  
              // Mengupdate action form dengan username yang diambil dari data-atribut
              form.action = `{{ url('/manajemen_akun') }}/${username}`;
          });
      });
  });
  </script>
  

{{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBackdrop" aria-labelledby="offcanvasBackdropLabel">
  
  <div class="offcanvas-body my-auto mx-0 flex-grow-0">
    <p class="text-center">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
    <button type="button" class="btn btn-primary mb-2 d-grid w-100">Continue</button>
    <button type="button" class="btn btn-outline-secondary d-grid w-100" data-bs-dismiss="offcanvas">Cancel</button>
  </div>
</div> --}}