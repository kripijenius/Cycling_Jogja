
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="row profile">
              <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                  <img src="https://static.vix.com/es/sites/default/files/styles/1x1/public/b/brad-pitt-10.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                  <div class="profile-usertitle-name">
                  {{ Auth::user()->nama }}
                  </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                  <button type="button" class="btn btn-success btn-sm">Kontribusi</button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit Profil</button></a>
                </div>
                

        
                {{-- yang baru --}}
                


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <div class="card-body">
                            <form method="POST" action="/editprofil">
                                @method('patch')
                                @csrf

                          <div class="modal-body">

                            <div class="form-group">
                              <label for="nama" class="col-form-label">Nama:</label>
                              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ Auth::user()->nama }}" autocomplete="nama" autofocus>

                              @error('nama')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                  
                              <div class="form-group">
                                  <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                                  <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                          <option value="L" autocomplete="jenis_kelamin" autofocus>Laki-laki</option>
                                          <option value="P"autocomplete="jenis_kelamin" autofocus>Perempuan</option>
                                      </select>
                                      @error('jenis_kelamin')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                      
                                  <div class="form-group">
                                      <label for="nomor_hp" class="col-form-label">Nomor Telepon:</label>
                                      <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{ Auth::user()->nomor_hp }}" autocomplete="nomor_hp" autofocus>

                                      @error('nomor_hp')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}" autocomplete="tanggal_lahir" autofocus>

                                        @error('tanggal_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>

                                      <div class="form-group">
                                          <label for="email" class="col-form-label">Email:z</label>
                                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" autocomplete="email">

                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                        </div>

                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                          <button type="submit" class="btn btn-primary" style="background-color: #F38230; border:#F38230">Update</button>

                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
    