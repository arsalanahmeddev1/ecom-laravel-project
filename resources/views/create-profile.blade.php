@extends('layouts.app')
@section('content')
  <section class="inner-sec-bg sec-pd-3">
      <div class="container">
          <div class="row">
              <div class="col-lg-5 col-12">
                  <div class="sec-pd-3 pb-0">
                      <h2 class="inner-title md">Create Account</h2>
                      <div class="c-acc-border"></div>
                      <div class="c-acc-tabs mt-30">
                          <ul class="nav nav-pills" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">User</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Ride</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Vendor</button>
                              </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                  <div class="c-acc-forms">
                                      <form action="">
                                          <div class="row">
                                              <div class="col-lg-12 col-12">
                                                  <div class="acc-avatar create-a-acc">
                                                      <img src="./assets/images/c-acc-avatar.png" class="img-fluid" alt="">
                                                      <div class="acc-avatar-c">
                                                          <label for="myfile"><img src="./assets/images/camera.svg" class="" alt=""></label>
                                                          <input type="file" class="d-none" id="myfile" name="myfile">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12 col-12">
                                                  <div class="input-wrap">
                                                      <div class="label-area mt-40">
                                                          <label for="" class="label-field">First Name<span>*</span>:</label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your First Name">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Last Name<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Last Name">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Email<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Email">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Phone No<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area relative">
                                                          <input type="text" class="input-field pad" placeholder="Enter Your Phone No">
                                                          <select class="form-select" aria-label="Default select example">
                                                              <option selected>+1</option>
                                                              <option value="1">+2</option>
                                                              <option value="2">+3</option>
                                                              <option value="3">+4</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Password<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area relative">
                                                          <input type="password" class="input-field" placeholder="Enter Your Password">
                                                          <div class="eye-btn">
                                                              <i class="fa-solid fa-eye-slash show-pass"></i>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Confirm Password<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area relative">
                                                          <input type="text" class="input-field" placeholder="Confirm Your Password">
                                                          <div class="eye-btn">
                                                              <i class="fa-solid fa-eye-slash show-pass"></i>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap mt-60">
                                                      <button type="submit" class="primary-btn submit-btn">Sign Up</button>
                                                  </div>
                                                  <h3 class="text-hd-mdb change text-center">Already Have An Account? <a href="#" class="sign-in-btn">Sign In</a></h3>

                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

                                  <div class="c-acc-forms">
                                      <form action="">
                                          <div class="row">
                                              <div class="col-lg-12 col-12">
                                                  <div class="acc-avatar create-a-acc">
                                                      <img src="./assets/images/c-acc-avatar.png" class="img-fluid" alt="">
                                                      <div class="acc-avatar-c">
                                                          <label for="myfile"><img src="./assets/images/camera.svg" class="" alt=""></label>
                                                          <input type="file" class="d-none" id="myfile" name="myfile">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12 col-12">
                                                  <div class="input-wrap">
                                                      <div class="label-area mt-40">
                                                          <label for="" class="label-field">First Name<span>*</span>:</label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your First Name">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Last Name<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Last Name">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Email<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Email">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Phone No<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="number" class="input-field" placeholder="Enter Your Phone No">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Password<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Password">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Confirm Password<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Confirm Your Password">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap mt-60">
                                                      <button type="submit" class="primary-btn submit-btn">Sign Up</button>
                                                  </div>
                                                  <h3 class="text-hd-mdb change text-center">Already Have An Account? <a href="#" class="sign-in-btn">Sign In</a></h3>

                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                  <div class="c-acc-forms">
                                      <form action="">
                                          <div class="row">
                                              <div class="col-lg-12 col-12">
                                                  <div class="acc-avatar create-a-acc">
                                                      <img src="./assets/images/c-acc-avatar.png" class="img-fluid" alt="">
                                                      <div class="acc-avatar-c">
                                                          <label for="myfile"><img src="./assets/images/camera.svg" class="" alt=""></label>
                                                          <input type="file" class="d-none" id="myfile" name="myfile">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-lg-12 col-12">
                                                  <div class="input-wrap">
                                                      <div class="label-area mt-40">
                                                          <label for="" class="label-field">First Name<span>*</span>:</label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your First Name">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Last Name<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Last Name">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Email<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Email">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Phone No<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="number" class="input-field" placeholder="Enter Your Phone No">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Password<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Enter Your Password">

                                                      </div>
                                                  </div>
                                                  <div class="input-wrap">
                                                      <div class="label-area">
                                                          <label for="" class="label-field">Confirm Password<span>*</span>: </label>
                                                      </div>
                                                      <div class="input-area">
                                                          <input type="text" class="input-field" placeholder="Confirm Your Password">
                                                      </div>
                                                  </div>
                                                  <div class="input-wrap mt-60">
                                                      <button type="submit" class="primary-btn submit-btn">Sign Up</button>
                                                  </div>
                                                  <h3 class="text-hd-mdb change text-center">Already Have An Account? <a href="#" class="sign-in-btn">Sign In</a></h3>

                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
              <div class="col-lg-7 col-12">
                  <div class="c-acc-r">
                      <img src="./assets/images/c-acc-bg.png" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection