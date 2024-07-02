    <div class="caixa p-3 px-4 altura-minima">
        <div class="d-flex h5 fw-600 mb-4 p-2 border-bottom align-items-center justify-content-between">
            <div class="d-flex">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.75 9H17.25M0.75 12.75H17.25M0.75 16.5H17.25M2.625 1.5H15.375C15.8723 1.5 16.3492 1.69754 16.7008 2.04917C17.0525 2.40081 17.25 2.87772 17.25 3.375C17.25 3.87228 17.0525 4.34919 16.7008 4.70083C16.3492 5.05246 15.8723 5.25 15.375 5.25H2.625C2.12772 5.25 1.65081 5.05246 1.29917 4.70083C0.947544 4.34919 0.75 3.87228 0.75 3.375C0.75 2.87772 0.947544 2.40081 1.29917 2.04917C1.65081 1.69754 2.12772 1.5 2.625 1.5Z"
                        stroke="#44B1D9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <p class="ml-1">
                    Saída de Produtos
                </p>

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

            </div>

        </div>

        <div class="base-form alt p-2 pb-4 mostraFiltro">
            <div class="rows  align-items-center">
                <div class="col-6">
                    <span class="text-label"> Produto</span>
                    <input type="text" id="id_produto" data-type="localizar_produto" class="form-campo">
                </div>
                <div class="col-2">
                    <span class="text-label"> Valor</span>
                    <input type="text" id="preco" name="preco" class="form-campo">
                </div>
                <div class="col-2">
                    <span class="text-label"> Qtde</span>
                    <input type="text" value="1" id="qtde" name="qtde" class="form-campo">
                </div>

                <div class="col-2 mt-2 p-2">
                    <input type="hidden" id="id_produto" name="id_produto">
                    <input type="button" name="Submit" class="btn btn-azul width-100" value="Inserir" id="btnInserir">
                </div>
            </div>
        </div>

        <div class="base-form alt p-2 pb-4  d-block border radius-4 mb-4 backoffice">
            <form action="<?php echo URL_BASE . "saida/salvar"?>" method="post">
                <div class="rows  align-items-center">
                    <div class="col-3 mb-3 ">
                        <span class="text-label">Produto </span>
                        <select name="id_produto" class="form-campo">
                            <?php foreach($produtos as $p){ 
                        echo "<option value='$p->id_produto'>$p->id_produto - $p->nome</option>";
                        } ?>
                        </select>
                    </div>

                    <div class="col-2 mb-3 ">
                        <span class="text-label">Quantidade</span>
                        <input type="text" name="qtde_saida" required id="qtde_saida" value="" class="form-campo">
                    </div>



                    <div class="col-1 mt-2 p-2">
                        <input type="submit" name="Submit" class="btn btn-azul width-100" value="Salvar"
                            id="btnInserir">
                    </div>
                </div>
            </form>
        </div>


        <div class="rows">
            <div class="col-12 mb-3">
                <table id="dataTable" width="100%" border="0" cellpadding="0" cellspacing="0"
                    class="table border radius-4">
                    <thead>
                        <tr>
                            <th width="2%" align="center">Id</th>
                            <th align="center">Data</th>
                            <th align="center">Hora</th>
                            <th align="center">Produto</th>
                            <th align="center">Quantidade</th>
                            <th align="center">Valor</th>
                            <th align="center">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($lista as $l){?>
                        <tr>
                            <td align="center"><?php echo $l->id_saida ?> </td>
                            <td align="center"><?php echo databr($l->data_saida)?> </td>
                            <td align="center"><?php echo $l->hora_saida?> </td>
                            <td align="center"><?php echo $l->nome ?> </td>
                            <td align="center"><?php echo $l->qtde_saida ?> </td>
                            <td align="center">R$ <?php echo moedaBr($l->valor_saida) ?></td>
                            <td align="center">R$ <?php echo moedaBr($l->subtotal_saida) ?> </td>
                        </tr>
                        <?php }?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>