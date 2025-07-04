<table id="data_table" class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Biaya per Jam</th>
            <th>Dibuat Oleh</th>
            <th>Tanggal di Buat</th>
            <th class="nosort">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $category->name ?? '-' }}</td>
                <td>{{ $category->fee_per_hour ?? '-' }}</td>
                <td>{{ $category->user->name ?? 'Admin' }}</td>
                <td>{{ optional($category->created_at)->format('Y/m/d') ?? '-' }}</td>
                <td>
                    <div class="table-actions">
                        <!-- <a href="#"><i class="ik ik-eye"></i></a> -->
                        <a href="{{ route('backend.categories.edit', $category->cat_id) }}"><i class="ik ik-edit-2"></i></a>
                        <a href="#" data-toggle="modal" data-target="#delete{{ $key }}"><i class="ik ik-trash-2"></i></a>
                    </div>
                </td>
                <td></td>
            </tr>
            @include('backend.categories.delete')
        @endforeach
    </tbody>
</table>