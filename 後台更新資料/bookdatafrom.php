<!DOCTYPE html>
<!-- 管理員手動新增書籍資料表單 --> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增書籍表單</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>

    <form enctype="multipart/form-data" name="add_book" onsubmit="addbook();return false;">
        書名：<input name="book_name" type="text" placeholder="請輸入書名"><br>
        作者：<input name="book_author" type="text" placeholder="請輸入作者(英文名請輸入英文)"><br>
        譯者：<input name="book_trans" type="text" placeholder="請輸入譯者"><br>
        出版社：<input name="book_public" type="text" placeholder="請輸入出版社"><br>
        出版日期：<input name="book_date" type="text" placeholder="YYYY/MM/DD"><br>
        ISBN：<input name="book_ISBN" type="text" placeholder="ISBN"><br>
     
        語言：<label>
             <input type="radio" name="book_lang" checked="checked" value="繁中">繁體中文
             <input type="radio" name="book_lang" value="簡中">簡體中文
             <input type="radio" name="book_lang" value="外文" >外文
                    </label><br>
        類別：<label><select name="book_type">
                        <option value="no">請選擇</option>
                        <option value="人文史地">人文史地</option>
                        <option value="商業與經濟">商業與經濟</option>
                        <option value="科學與科普">科學與科普</option>
                        <option value="電腦科學">電腦科學</option>
                        <option value="醫學">醫學</option>
                        <option value="語言">語言</option>
                        <option value="社會科學">社會科學</option>
                        <option value="藝術與設計">藝術與設計</option>
                        <option value="生活與旅遊">生活與旅遊</option>
                        <option value="大專院校教科書">大專院校教科書</option>
                        <option value="考試用書">考試用書</option>
                        <option value="文學小說">文學小說</option>
                        <option value="漫畫">漫畫</option>
                        <option value="圖文書">圖文書</option>
                        <option value="兒童圖書">兒童圖書</option>
                        
                    </select></label><br>
        上傳封面照片：<input name="book_img" type="file"><br>
        書本簡介：<br>
        <label><textarea name="book_intro"cols="20" rows="5">自由填寫</textarea></label><br>        

        <input type="hidden" name="apply_status" value="1">
        <input type="hidden" name="apply_applicant" value="admin">

        <input type="submit" value="新增">
        <input type="reset"  value="重置"> 
        <input type="button" value="取消">
    </form>

    <script type="text/javascript">

        function addbook(){

            var forms = document.forms['add_book']
            var book_name = forms.book_name.value
            var book_author = forms.book_author.value
            var book_trans = forms.book_trans.value
            var book_public = forms.book_public.value
            var book_date = forms.book_date.value
            var book_ISBN = forms.book_ISBN.value
            var book_type = forms.book_type.value
            var book_lang = forms.book_lang.value
            var book_img = forms.book_img.value
            var book_intro = forms.book_intro.value
            var apply_status = forms.apply_status.value
            var apply_applicant = forms.apply_applicant.value
            
            if(book_name.length == 0 || book_type=="no" ){
            console.log("error,Book Name is null!")
            }
            else{
                var postdata = {
                    book_name : book_name,
                    book_author : book_author,
                    book_trans : book_trans,
                    book_public : book_public,
                    book_date : book_date,
                    book_ISBN : book_ISBN,
                    book_type : book_type,
                    book_lang : book_lang,
                    book_img : book_img,
                    book_intro : book_intro,
                    apply_status : apply_status,
                    apply_applicant : apply_applicant,
                }
                jQuery.ajax({
                    type : 'POST',
                    url : 'addBookData.php',
                    data : postdata,
                    success : function(data){
                        console.log(data)
                        alert("已新增至資料庫")
                        window.close()
                    }
                })
            }
        }

    </script>

</body>
   


