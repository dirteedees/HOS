<?php
require('header.php');
require('nav.php');
require('pooks_pick.php');
require('center_panel.php');
?>

        <div class="container">
            <h2>Review/Content subit form</h2>
            <div class="form-group">
                <form action="/processe">
                    <label for="comment">PLACE HOLDER TEXT AREA</label>
                    <textarea class="form-control" rows="2" id="comment"></textarea>
                    <label for="comment">PLACE HOLDER TEXT AREA</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Hit!</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio">Shit!</label>
                        </div>
                        <div class="radio disabled">
                            <label><input type="radio" name="optradio" disabled>GOLD HIT!</label>
                        </div>
                        <div class="radio disabled">
                            <label><input type="radio" name="optradio" disabled>GOLD SHIT!</label>
                        </div>
                        <label for="sel1">Who you?:</label>
                         <select class="form-control" id="sel1">
                             <option>Dees</option>
                             <option>Kurt</option>
                             <option>Pooks</option>
                             <option>Sharp</option>
                         </select>
                            <br>
                        <label for="pwd">Password:</label>
                         <input type="password" class="form-control" id="pwd">
                            <br>
                        <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<?php require ('footer.php');?>
</html>














































































-
