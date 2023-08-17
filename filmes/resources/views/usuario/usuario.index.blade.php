@section('title', '')

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
    @vite('resources/css/app.css')
</head>
<body>

<main class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white">

<form method="POST" action="{{ route('login') }}">
        @csrf
  <section class="flex w-[30rem] flex-col space-y-10">
    <div class="text-center text-4xl font-medium">Log In</div>
    <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
      <input class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
      type="email" placeholder="Email" name="email"/>
    </div>

    <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
      <input class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
      type="password" placeholder="Senha" name="password"/>
    </div>

    <button class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400" type="submit"
    >Logar-se</button>

    <a
      href="#"
      class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300"
      >FORGOT PASSWORD?</a
    >

    <p class="text-center text-lg">
      No account?
      <a
        href="#"
        class="font-medium text-indigo-500 underline-offset-4 hover:underline"
        >Create One</a
      >
    </p>
  </section>
  </form>
</main>
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
</body>
</html>
