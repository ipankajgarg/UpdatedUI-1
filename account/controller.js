app.controller("myctrl",($scope,myfactory)=>{
     userinfo();
    function userinfo()
    {
//    var no = localStorage.getItem("mobilenumber")
        var no = 8320454585;
        var promise = myfactory.info(no);
    promise.then(function(data){
        console.log(data.FirstName)
        $scope.FirstName = data.FirstName;
        $scope.LastName = data.LastName;
        $scope.EmailId = data.EmailId;
        $scope.Phoneno = data.PhoneNo;
        $scope.password = data.password
        }
      ,function(err){
        alert("err");   
    } 
    )
}
    $scope.hello = "hello"
})