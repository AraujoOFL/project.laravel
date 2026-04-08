<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2><i class="bi bi-truck"></i> Fornecedores</h2>
    <a href="<?php echo e(route('fornecedores.create')); ?>" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo Fornecedor
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($fornecedor->id); ?></td>
                        <td><?php echo e($fornecedor->nome); ?></td>
                        <td><?php echo e($fornecedor->cnpj); ?></td>
                        <td><?php echo e($fornecedor->email); ?></td>
                        <td><?php echo e($fornecedor->telefone); ?></td>
                        <td>
                            <a href="<?php echo e(route('fornecedores.show', $fornecedor)); ?>" 
                               class="btn btn-sm btn-info" title="Visualizar">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="<?php echo e(route('fornecedores.edit', $fornecedor)); ?>" 
                               class="btn btn-sm btn-warning" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-danger" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#deleteModal<?php echo e($fornecedor->id); ?>"
                                    title="Excluir">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Modal de Confirmação de Exclusão -->
                    <div class="modal fade" id="deleteModal<?php echo e($fornecedor->id); ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmar Exclusão</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Tem certeza que deseja excluir o fornecedor <strong><?php echo e($fornecedor->nome); ?></strong>?</p>
                                    <p class="text-danger">Atenção: Fornecedores com produtos vinculados não podem ser excluídos!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <form action="<?php echo e(route('fornecedores.destroy', $fornecedor)); ?>" method="POST" style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum fornecedor cadastrado.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo e($fornecedores->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\project.laravel\project.laravel\resources\views/fornecedores/index.blade.php ENDPATH**/ ?>