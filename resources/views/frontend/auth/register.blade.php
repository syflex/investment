@extends('frontend.layouts.front')

@section('title', app_name() . ' | '.__('labels.frontend.auth.register_box_title'))

@section('content')
@include('frontend.includes.front')
   <!-- Section -->
		<div class="section section-pad">
			<div class="container">
				<div class="tab-custom">
					<div class="row">
						<div class="col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">
							<ul class="nav nav-tabs ucap" id="loginreg-form">
								<li><a href="#tab1" data-toggle="tab">Log In</a></li>
								<li class="active"><a href="#tab2" data-toggle="tab">Register</a></li>
							</ul>
						</div>
					</div>
					<div class="gaps size-2x"></div>
					<!-- Tab panes -->
					<div class="tab-content no-pd">
						<div class="tab-pane fade" id="tab1">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
									<h3 class="heading-lead center">Login Your Account</h3>
									{{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
										<div class="form-results"></div>
										<div class="form-group">
											<div class="form-field form-m-bttm">
                                                {{ html()->email('email')
                                                    ->class('form-control')
                                                    ->placeholder(__('validation.attributes.frontend.email'))
                                                    ->attribute('maxlength', 191)
                                                    ->required() }}
											</div>
										</div>
										<div class="form-group">
											<div class="form-field">
                                                {{ html()->password('password')
                                                    ->class('form-control')
                                                    ->placeholder(__('validation.attributes.frontend.password'))
                                                    ->required() }}
											</div>
										</div>
										<button type="submit" class="btn btn-alt">Log In</button>
										<span class="gaps"></span>
										<p class="small">Not registered? <a class="switch-tab" data-tabnav="loginreg-form" href="#tab2" data-toggle="tab">Register here</a></p>
                                    {{ html()->form()->close() }}
								</div>
							</div>
                        </div>
                        
						<div class="tab-pane fade in active" id="tab2">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
									<h3 class="heading-lead center">Register An Account</h3>
                                    {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
										<div class="form-results"></div>
										<div class="form-group">
											<div class="form-field form-m-bttm">
                                                    {{ html()->text('first_name')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.first_name'))
                                                ->attribute('maxlength', 191) }}
											</div>
										</div>
										<div class="form-group">
											<div class="form-field form-m-bttm">
                                                    {{ html()->text('last_name')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.last_name'))
                                                ->attribute('maxlength', 191) }}
											</div>
										</div>
										<div class="form-group">
											<div class="form-field">
                                                    {{ html()->email('email')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.email'))
                                                ->attribute('maxlength', 191)
                                                ->required() }}
											</div>
										</div>
										<div class="form-group">
											<div class="form-field">
                                                    {{ html()->password('password')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.password'))
                                                ->required() }}
											</div>
                                        </div>
                                        <div class="form-group">
											<div class="form-field">
                                                    {{ html()->password('password_confirmation')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                                ->required() }}
											</div>
										</div>
										<div class="form-group">
											<div class="form-field">
												<input type="checkbox" name="signup-term"> <span> I accept and agree with the terms of the <a href="#">User Agreement</a>.</span>
											</div>
										</div>

										<button type="submit" class="btn btn-alt">Signup</button>
										<span class="gaps"></span>
										<p class="small">Already registered? <a class="switch-tab" data-tabnav="loginreg-form" href="#tab1" data-toggle="tab">Login here</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- End Section -->
@endsection

@push('after-scripts')
    @if (config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@endpush
