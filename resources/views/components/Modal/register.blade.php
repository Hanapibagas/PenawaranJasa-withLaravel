<div class="hidden modal overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
    id="registerModal">
    <div class="relative w-128 my-6 mx-auto max-w-md">
        <div
            class="border-0 rounded-xl shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <div class="p-5 rounded-t-xl text-center mt-5 mx-10">
                <h3 class="text-2xl font-semibold">
                    Masuk ke Serv
                </h3>
                <p class="text-gray-400 mt-1 text-sm">
                    Bergabung ke Serv & mulai real project
                </p>
            </div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="relative p-6 flex-auto mx-10">
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm mb-2" for="name">
                            Nama lengkap
                        </label>
                        <input
                            class="appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 placeholder-serv-text text-xs"
                            id="name" name="name" required type="text" placeholder="Your name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 placeholder-serv-text text-xs"
                            id="email" name="email" required type="email" placeholder="name@domain.com">
                    </div>
                    <div>
                        <label class="block text-grey-darker text-sm mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 placeholder-serv-text text-xs mb-3"
                            id="password" required name="password" type="password" placeholder="At least 8 characters">
                    </div>
                    <div>
                        <label class="block text-grey-darker text-sm mb-2" for="password_confirmation">
                            Konfimasai sandi
                        </label>
                        <input
                            class="appearance-none border border-gray-300 rounded-lg w-full py-3 px-4 placeholder-serv-text text-xs mb-3"
                            id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="At least 8 characters">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="inline-block text-xs text-gray-400">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox"
                                    class="form-checkbox h-5 w-5 text-serv-button rounded border-serv-text"><span
                                    class="ml-2 text-gray-400">Saya setujuh dengan <a href="#"
                                        class="text-serv-button">Syarat
                                        & Ketentuan</a></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 rounded-b-xl mx-10">
                    <input type="hidden" name="auth" value="true">
                    <button type="submit"
                        class="block text-center bg-serv-button text-white text-lg py-3 px-12 my-2 rounded-lg w-full">
                        Daftar
                    </button>
                    <p href="#" class="text-center py-5">
                        Apakah anda sudah memiliki akun? <a href="#" class="text-serv-button"
                            onclick="toggleModal('loginModal');toggleModal('registerModal') ">Masuk</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="hidden opacity-75 fixed inset-0 z-40 bg-black" id="registerModal-backdrop"></div>