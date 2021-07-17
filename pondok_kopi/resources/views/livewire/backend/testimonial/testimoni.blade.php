<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Kelamin</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataTestimoni as $key => $testimoni)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $testimoni->name }}</td>
                                <td>{{ $testimoni->gender }}</td>
                                <td>{{ $testimoni->phone_number }} </td>
                                <td><button type="button" class="btn btn-sm btn-info mb-1" data-toggle="modal"
                                        data-target="#mediumModal{{ $testimoni->id }}">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                            <div wire:ignore.self class="modal fade" id="mediumModal{{ $testimoni->id }}"
                                tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>

                
                                           
                                            <h5 class="modal-title" id="mediumModalLabel">Detail Pesanan:
                                                <b>{{ $testimoni->name }} {{ $testimoni->id }}</b>
                                            </h5>
                                        </div>
                                        <div class="modal-body">

                                            
                                                <div class="row border-top mb-3 mt-2">
                                                Email :
                                                <div class="col-3" > 
                                               {{ $testimoni->email }}
                                                 </div>
                                                 </div>
                                                
                                                 <div class="row border-top mb-3 mt-2">
                                                 Alamat :
                                                <div class="col">
                                                {{ $testimoni->address }}
                                              </div>
                                              </div>                 
                                              </div>                  
                                                            
                                                         
                                                     
                                        <div class="modal-footer">
                                            <button type="button" wire:click="cancelPelanggan('{{ $testimoni->id }}')"
                                                class="btn btn-danger">Tolak</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
