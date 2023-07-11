<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">#/ID</th>
                        <th class="px-4 py-3">Email/Usuario</th>
                        <th class="px-4 py-3">Permiso</th>
                        <th class="px-4 py-3">Estado</th>
                        <th class="px-4 py-3">Acciones</th>

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($usuarios as $usuario)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">{{ $usuario->id }} </td>
                            <td class="px-4 py-3 border"> {{$usuario ->email}} </td>
                            <td class="px-4 py-3 border">  </td>
                            <td class="px-4 py-3 border">  </td>
                            <td class="px-4 py-3 border"> <a class="p-2 rounded-sm bg-green" href="{{route("admin.edit", $usuario) }}" >Editar</a> </td>
                    @endforeach
</section>
