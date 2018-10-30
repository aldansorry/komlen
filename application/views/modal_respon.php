<div class="modal-header">
	<h5 class="modal-title" id="modalLabel">Kode : <?php echo $keluhan->kode ?></h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
	<p class="text-left">Keluhan :<br><?php echo $keluhan->keluhan ?></p>
	<p class="text-left">Solusi :<br><?php echo $keluhan->solusi ?></p>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<td>Petugas</td>
				<td>Balasan</td>
			</tr>
		</thead>
		<tbody>
			<?php if (count($respon) != 0): ?>
				<?php foreach ($respon as $value): ?>
					<tr>
						<td><?php echo $value->petugas ?></td>
						<td><?php echo $value->balasan ?></td>
					</tr>
				<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td colspan="2" class="text-center">Menunggu Respon</td>
					</tr>
			<?php endif ?>
		</tbody>
	</table>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>