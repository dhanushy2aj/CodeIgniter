<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Tasks<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Tasks</h1>
	<h3><a href="<?= site_url("new")?>"New Task</a></h3>
    
    <ul>
        <?php foreach($tasks as $task): ?>
        
            <li>
               
			   <a href="<?= site_url("/show/" . $task['id']) ?>">
                <?= $task['description'] ?>
			   </a>
            </li>
            
        <?php endforeach; ?>
    </ul>

<?= $this->endSection() ?>