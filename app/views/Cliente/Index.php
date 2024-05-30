<div class="caixa p-3 px-4 altura-minima">
    <div class="d-flex h5 fw-600 mb-4 p-2 border-bottom align-items-center justify-content-between">
        <div class="d-flex">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.75 9H17.25M0.75 12.75H17.25M0.75 16.5H17.25M2.625 1.5H15.375C15.8723 1.5 16.3492 1.69754 16.7008 2.04917C17.0525 2.40081 17.25 2.87772 17.25 3.375C17.25 3.87228 17.0525 4.34919 16.7008 4.70083C16.3492 5.05246 15.8723 5.25 15.375 5.25H2.625C2.12772 5.25 1.65081 5.05246 1.29917 4.70083C0.947544 4.34919 0.75 3.87228 0.75 3.375C0.75 2.87772 0.947544 2.40081 1.29917 2.04917C1.65081 1.69754 2.12772 1.5 2.625 1.5Z"
                    stroke="#44B1D9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <p class="ml-1">Lista de clientes</p>
        </div>
        <div class="d-flex">
            <a href="#" class="filtro mr-2 btn btn-azul2 d-flex align-items-center px-3" tite="Voltar">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mr-1">
                    <path
                        d="M9.5 1.625C11.9106 1.625 14.2731 1.828 16.5726 2.21825C17.039 2.297 17.375 2.70475 17.375 3.17725V4.09075C17.375 4.34929 17.3241 4.6053 17.2251 4.84416C17.1262 5.08303 16.9812 5.30006 16.7984 5.48288L12.0454 10.2359C11.8626 10.4187 11.7175 10.6357 11.6186 10.8746C11.5197 11.1135 11.4687 11.3695 11.4688 11.628V14.1891C11.4688 14.5548 11.367 14.9134 11.1748 15.2245C10.9825 15.5356 10.7074 15.787 10.3802 15.9505L7.53125 17.375V11.628C7.53125 11.3695 7.48033 11.1135 7.38139 10.8746C7.28246 10.6357 7.13744 10.4187 6.95462 10.2359L2.20162 5.48288C2.01881 5.30006 1.87379 5.08303 1.77486 4.84416C1.67592 4.6053 1.625 4.34929 1.625 4.09075V3.17725C1.625 2.70475 1.961 2.297 2.42738 2.21825C4.76412 1.82262 7.13 1.62418 9.5 1.625Z"
                        stroke="#FBFBFB" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Filtro
            </a>

            <a href="<?php echo URL_BASE . "cliente/create"?>" class="btn btn-azul d-flex align-items-center"
                tite="Voltar">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 20" stroke-width="1.5"
                    stroke="currentColor" width="25">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                </svg>
                Cadastrar novo
            </a>
        </div>
    </div>
    <div class="base-form alt p-2 pb-4 mostraFiltro">
        <div class="rows align-items-center">
            <div class="col-10">
                <span class="text-label"> Nome</span>
                <input type="text" name="termodabusca" value="" class="form-campo">
            </div>
            <div class="col-2 mt-2">
                <input type="submit" name="Submit" value="Pesquisar" class="btn btn-azul width-100">
            </div>
        </div>
    </div>


    <div class="rows">
        <div class="col-12 mb-3">
            <table id="" width="100%" border="0" cellpadding="0" cellspacing="0" class="table border radius-4">
                <thead>
                    <tr>
                        <th align="center">Id</th>
                        <th align="center">Nome</th>
                        <th align="center">Email</th>
                        <th align="center">Fone</th>
                        <th align="center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista as $l){?>
                    <tr>
                        <td align="center"><?php echo $l->id_cliente ?></td>
                        <td align="center"><?php echo $l->nome ?></td>
                        <td align="center"><?php echo $l->email ?></td>
                        <td align="center"><?php echo $l->celular ?></td>
                        <td align="center">
                            <a href="<?php echo URL_BASE . "cliente/edit/" . $l->id_cliente ?>" class="mx-1"
                                title="Editar">
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.8287 2.78977L14.2683 1.43939C14.5684 1.15805 14.9754 1 15.3998 1C15.8242 1 16.2312 1.15805 16.5313 1.43939C16.8314 1.72073 17 2.10231 17 2.50018C17 2.89805 16.8314 3.27963 16.5313 3.56096L7.46989 12.0561C7.01876 12.4787 6.46243 12.7894 5.85114 12.96L3.55997 13.6L4.24262 11.4521C4.42462 10.879 4.75601 10.3574 5.20688 9.93448L12.8287 2.78977ZM12.8287 2.78977L15.0798 4.90015M13.7998 10.4001V14.2C13.7998 14.6774 13.5975 15.1352 13.2375 15.4728C12.8774 15.8104 12.3891 16 11.8799 16H2.91997C2.41077 16 1.92241 15.8104 1.56235 15.4728C1.20228 15.1352 1 14.6774 1 14.2V5.80013C1 5.32275 1.20228 4.86492 1.56235 4.52736C1.92241 4.1898 2.41077 4.00016 2.91997 4.00016H6.97325"
                                        stroke="#1BD079" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="javascript:;" onclick="excluir(this)" data-entidade="cliente"
                                data-id="<?php echo $l->id_cliente?>" class="ml-2" title="Excuir">
                                <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3248 6.88491L10.0313 14.7309M5.96873 14.7309L5.67515 6.88491M14.1328 4.08653C14.423 4.13186 14.7115 4.17981 15 4.23124M14.1328 4.08653L13.2267 16.1893C13.1897 16.6821 12.973 17.1423 12.62 17.478C12.267 17.8137 11.8037 18.0001 11.3227 18H4.67733C4.19632 18.0001 3.73299 17.8137 3.37998 17.478C3.02698 17.1423 2.81032 16.6821 2.77333 16.1893L1.86715 4.08653M14.1328 4.08653C13.1536 3.93442 12.1693 3.81898 11.1818 3.74043M1.86715 4.08653C1.57697 4.13099 1.28848 4.17893 1 4.23037M1.86715 4.08653C2.84642 3.93442 3.83074 3.81898 4.81818 3.74043M11.1818 3.74043V2.94189C11.1818 1.9132 10.4097 1.05538 9.40848 1.02312C8.46973 0.992293 7.53027 0.992293 6.59152 1.02312C5.5903 1.05538 4.81818 1.91407 4.81818 2.94189V3.74043M11.1818 3.74043C9.06376 3.57225 6.93624 3.57225 4.81818 3.74043"
                                        stroke="#FA3636" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <div class="paginacao justify-content-end">
                <ul>
                    <li>
                        <a href="">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.05555 12.3718L1.26495 6.58125L7.05555 0.790649" stroke="black"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="ativo">1</li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li>
                        <a href="">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.944388 12.3718L6.73499 6.58125L0.944388 0.790649" stroke="black"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>