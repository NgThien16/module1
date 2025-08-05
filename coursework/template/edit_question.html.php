
  <div class="container mt-5">
        <form action="/coursework/edit_question.php" method="post">
       <input type="hidden" name="id" value ="<?=$question['id'];?>">
        <label class="form-label" for="title" >Title</label><br>
        <textarea class="form-control" name="title" col="1">
          <?=$question['title']?>
        </textarea>
        <label class="form-label" for="body">Body</label><br>
       <textarea class="form-control" name="content" row="10" cols="40">
          <?=$question['content']?>
        </textarea>
    <button type="submit" class="btn btn-primary"> Save</button>
</form>
  </div>

