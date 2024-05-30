<div class="caixa p-3 px-4 altura-minima">
    <div class="d-flex h5 fw-600 mb-4 p-2 border-bottom align-items-center justify-content-between">
        <div class="d-flex">
            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9.5 6.88462V12.1154M12.1154 9.5H6.88462M10.4241 3.23179L8.5759 1.38359C8.45448 1.26202 8.31029 1.16557 8.15158 1.09975C7.99287 1.03393 7.82274 1.00004 7.65092 1H2.96154C2.44131 1 1.94238 1.20666 1.57452 1.57452C1.20666 1.94238 1 2.44131 1 2.96154V13.4231C1 13.9433 1.20666 14.4422 1.57452 14.8101C1.94238 15.178 2.44131 15.3846 2.96154 15.3846H16.0385C16.5587 15.3846 17.0576 15.178 17.4255 14.8101C17.7933 14.4422 18 13.9433 18 13.4231V5.57692C18 5.05669 17.7933 4.55777 17.4255 4.18991C17.0576 3.82205 16.5587 3.61538 16.0385 3.61538H11.3491C11.0024 3.61508 10.6691 3.4771 10.4241 3.23179Z"
                    stroke="#44B1D9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <p class="ml-1">
                <?php
                          
                if ($cliente->id_cliente ?? null) 
                    {
                        echo "Editar clientes";
                    } 
                    else 
                    {
                        echo "Cadastrar clientes";
                    }
                ?>

            </p>
        </div>
        <div>
            <a href="<?php echo URL_BASE . "cliente"?>" class="" tite="Voltar">
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.5 8H1.5M1.5 8L8.25 14.75M1.5 8L8.25 1.25" stroke="#5BBADD" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
    <form action="<?php echo URL_BASE . "cliente/salvar"?>" method="post">
        <input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente ?? null?>">
        <div class="rows">
            <div class="col-12 mb-3 ">
                <span class="text-label">Nome cliente</span>
                <input type="text" name="nome" id="nome" value="<?php echo $cliente->nome ?? null?>" class="form-campo"
                    require>
            </div>

            <div class="col-3 mb-3">
                <span class="text-label">Cep</span>
                <input type="text" name="cep" id="cep" value="<?php echo $cliente->cep ?? null?>"
                    class="form-campo mascara-cep busca_cep">
            </div>

            <div class="col-6 mb-3">
                <span class="text-label">Logradouro</span>
                <input type="text" name="endereco" id="endereco" value="<?php echo $cliente->endereco ?? null?>"
                    class="form-campo rua">
            </div>

            <div class="col-3 mb-3">
                <span class="text-label">Número</span>
                <input type="text" name="numero" id="numero" value="<?php echo $cliente->numero ?? null?>"
                    class="form-campo">
            </div>

            <div class="col-12 mb-3">
                <span class="text-label">Complemento</span>
                <input type="text" name="complemento" id="complemento"
                    value="<?php echo $cliente->complemento ?? null?>" class="form-campo">
            </div>

            <div class="col-4 mb-3">
                <span class="text-label">Bairro</span>
                <input type="text" name="bairro" id="bairro" value="<?php echo $cliente->bairro ?? null?>"
                    class="form-campo bairro">
            </div>
            <div class="col-4 mb-3">
                <span class="text-label">UF</span>
                <input type="text" name="uf" id="uf" value="<?php echo $cliente->uf ?? null?>"
                    class="form-campo estado">
            </div>
            <div class="col-4 mb-3">
                <span class="text-label">Cidade</span>
                <input type="text" name="cidade" id="cidade" value="<?php echo $cliente->cidade ?? null?>"
                    class="form-campo cidade">
            </div>
            <div class="col-2 mb-3">
                <span class="text-label">Sexo</span>
                <select name="sexo" class="form-campo">
                    <option value="M" <?php echo ($cliente->sexo ?? null) == "M" ? "selected" : ""?>>Masculino</option>
                    <option value="F" <?php echo ($cliente->sexo ?? null) == "F" ? "selected" : ""?>>Feminino</option>
                </select>
            </div>

            <div class="col-3 mb-3">
                <span class="text-label">RG</span>
                <input type="text" name="rg" id="rg" value="<?php echo $cliente->rg ?? null?>" class="form-campo">
            </div>

            <div class="col-3 mb-3">
                <span class="text-label">CPF</span>
                <input type="text" name="cpf" id="cpf" value="<?php echo $cliente->cpf ?? null?>"
                    class="form-campo mascara-cpf">
            </div>

            <div class="col-4 mb-3">
                <span class="text-label">Celular</span>
                <input type="text" name="celular" id="celular" value="<?php echo $cliente->celular ?? null?>"
                    class="form-campo mascara-celular">
            </div>

            <div class="col-8 mb-3">
                <span class="text-label">Email</span>
                <input type="email" name="email" id="email" value="<?php echo $cliente->email ?? null?>"
                    class="form-campo" require>
            </div>

            <div class="col-4 mb-3">
                <span class="text-label">Data de Nascimento</span>
                <input type="date" name="data_nascimento" id="data_nascimento"
                    value="<?php echo $cliente->data_nascimento ?? null?>" class="form-campo">
            </div>

            <div class="col-12 mb-3">
                <span class="text-label">Observação</span>
                <input type="text" name="observacao" id="observacao" value="<?php echo $cliente->observacao ?? null?>"
                    class="form-campo">
            </div>

            <div class="col-12 mt-2">
                <input type="submit" value="Salvar" class="btn btn-azul m-auto d-table">
            </div>

        </div>
    </form>
</div>