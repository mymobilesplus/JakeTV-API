<html>

<head>
	<title>Set UnLikePost</title>
</head>

<body>
   
	<form action = "/api/user/unlikepost" method = "get">
         <input type="hidden" name = "accessToken" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyaWQiOjEyNTUsImVtYWlsIjoiYWFhQGFhLmNvbSJ9.XaE6nciyboAwJkG0uvppVoyfcbyqmCRAxwI5JXCNpuU">
      
         <table>
            <tr>
               <td>User Id</td>
               <td><input type = "text" name = "userid" /></td>
            </tr>
         
            <tr>
               <td>Post Id</td>
               <td><input type = "text" name = "postid" /></td>
            </tr>

            <tr>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Set" />
               </td>
            </tr>
         </table>
      
      </form>
</body>
</html>