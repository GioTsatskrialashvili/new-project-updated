<div class="container contact-page">
    <div class="row">
        <h2>Contact Us</h2>
        <form action="?page=contact&action=send"method="post" onsubmit=" return contact.send(this)">
        <?php 
                $msg = '';
                if(isset($_GET['status'])) {
                    if($_GET['status'] == 0) {
                        $msg = 'Could not send email, please try again later.';
                    } else {
                        $msg = 'Thank you, we will contact you soon.';
                    }
                }
            
            ?>
            <?php if($msg): ?>
                <p class="msg"><?= $msg ?></p>
            <?php endif; ?>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text"name="name"id="name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text"name="email" id="email">
            </div>
            <div class="form-group">
                <label for="">Subject</label>
                <input name="subject"id="subject">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea name="message"id="message" ></textarea>
            </div>
            <div class="form-group">
                <button>Send</button>
            </div>
        </form>
    </div>
</div>