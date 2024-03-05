<!-- source: https://gist.github.com/nraloux/bce10c4148380061781b928cdab9b193 -->
<!-- I have added support for dark mode and improved UI -->
@extends('layouts.mastar')
@section('content')
<div class="h-full bg-gray-400 dark:bg-gray-900">
	<!-- Container -->
	<div class="mx-auto">
		<div class="flex justify-center px-6 py-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
					style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
					<h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Create an Account!</h3>
          	<!--***** Form ******* -->
					<form action="{{route('registerStore')}}" method="POST"     class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
            @csrf
						<div class="mb-4 md:flex md:justify-between">
							
							
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                             Full Name
                            </label>
							<input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                type="text" name="name"
                                placeholder="Name"
                            />
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                                Email
                            </label>
							<input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="email"
                                type="email"
                                placeholder="Email"
                            />
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                                    Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="password"
                                    type="password"
                                    placeholder="******************"
                                />
								<p class="text-xs italic text-red-500">Please choose a password.</p>
							</div>
							{{-- <div class="md:ml-2">
								<label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="c_password">
                                    Confirm Password
                                </label>
								<input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                   name="password_confirmation"
                                    type="password"
                                    placeholder="******************"
                                />
							</div> --}}
						</div>
						<div class="mb-6 text-center">
							<button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Register Account
                            </button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
								href="#">
								Forgot Password?
							</a>
						</div>
						<div class="text-center">
							<a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
								href="./index.html">
								Already have an account? Login!
							</a>
						</div>
					</form>
        	<!-- End Form -->

				</div>
			</div>
		</div>
	</div>
</div>
@endsection