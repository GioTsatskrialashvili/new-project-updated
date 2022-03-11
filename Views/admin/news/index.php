<div class="container">
    <div class="row">
        <div class="list">
            <div class="header">
                <h2>News List</h2>
                <a href="?type=admin&page=news&action=add">Add</a>
            </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>short text</th>
                    <th>actions</th>
                </tr>
                <?php foreach($data['news'] as $value):?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['title'] ?></td>
                        <td><?= $value['short_text'] ?></td>
                        <td class="action">
                            <a href="">edit</a>
                            <form action="">
                                <button>delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>