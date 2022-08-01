<div class="filter-toolbar">
    <div class="d-flex justify-content-end align-items-center">
        <div class="dropdown me-3">
            <a href="#" class="text-3 fw-400 btn btn-sm btn-primary filter-btn d-inline-flex align-items-center shadow-none" id="filter-drop" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="material-icons-round me-2">filter_alt</span> Filtrar
            </a>
            <div class="dropdown-menu dropdown-menu-end p-4" aria-labelledby="filter-drop" style="width: 325px;">
                <form action="<?= url("/admin/users"); ?>" method="post">
                    <div class="text-start text-3 pb-3">Opções de Filtro</div>
                    <div class="dropdown-divider mx-n4"></div>
                    <div class="pb-4">
                        <label for="level" class="text-2 pt-3">Função</label>
                        <select name="level" class="form-select form-select-sm shadow-sm" title="Função do Usuário">
                            <option value=""> Selecione uma opção </option>
                            <option value=""> </option>
                            <option value="1"> Administrador </option>
                            <option value="2"> Produtor </option>
                            <option value="3"> Franquia </option>
                        </select>
                    </div>
                    <div class="pb-4">
                        <label for="status" class="text-2 pt-3">Situação</label>
                        <select name="status" class="form-select form-select-sm shadow-sm" title="Função do Usuário">
                            <option value=""> Selecione uma opção </option>
                            <option value=""> </option>
                            <option value="1"> Ativo </option>
                            <option value="2"> Bloqueado </option>
                        </select>
                    </div>
                    <div class="text-end">
                        <input type="submit" value="Aplicar" class="btn btn-sm btn-secondary shadow-sm">
                    </div>
                </form>
            </div>
        </div>
        <a href="<?= url("/admin/users/user"); ?>" class="text-3 fw-400 action pt-5 pt-lg-0"> 
            <span class="material-symbols-rounded me-2">add_circle</span> Adicionar Novo
        </a>
    </div>
</div>
