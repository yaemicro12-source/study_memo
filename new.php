    <?php
        if(isset($id)){
            $stady =new Stady();
            $stady->titel = $_REQUEST['titel'];
            $stady->cate = $_REQUEST['cate'];
            $stady->content = $_REQUEST['content'];
            $stady->memo = $_REQUEST['memo'];
            $stady->src = $_REQUEST['src'];
            $stady->save();
        }
    