<li class="{{ Request::is('kategoris*') ? 'active' : '' }}">
    <a href="{!! route('kategoris.index') !!}"><i class="fa fa-list"></i><span>Kategori</span></a>
</li>

<li class="{{ Request::is('barangs*') ? 'active' : '' }}">
    <a href="{!! route('barangs.index') !!}"><i class="fa fa-database"></i><span>Barang</span></a>
</li>

<li class="{{ Request::is('agamas*') ? 'active' : '' }}">
    <a href="{!! route('agamas.index') !!}"><i class="fa fa-institution"></i><span>Agama</span></a>
</li>

<li class="{{ Request::is('pelanggans*') ? 'active' : '' }}">
    <a href="{!! route('pelanggans.index') !!}"><i class="fa fa-address-card-o"></i><span>Pelanggan</span></a>
</li>

<li class="{{ Request::is('pegawais*') ? 'active' : '' }}">
    <a href="{!! route('pegawais.index') !!}"><i class="fa fa-user-md"></i><span>Pegawai</span></a>
</li>

<li class="{{ Request::is('penjualans*') ? 'active' : '' }}">
    <a href="{!! route('penjualans.index') !!}"><i class="fa fa-edit"></i><span>Penjualans</span></a>
</li>

