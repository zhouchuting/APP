//index.js
//获取应用实例
var app = getApp()
Page({
  data:{
      // mydata:[]  
    mydata: [
      {
        "id": 1,
        "title": "午餐",
        "cate": "10",
        "account": "-",
        "sdate": "2020-4-23"
      },
      {
        "id": 2,
        "title": "奶茶",
        "cate": "14",
        "account": "-",
        "sdate": "2020-4-23"
      }
    ],


  },
  onShow:function(options){
    // 生命周期函数--监听页面加载
    var that=this;
    wx.request({
      // url:
      // 'http://localhost:8080/mydata.json',
      url :
      'http://localhost:8080/cashbook/readRecord.php',
      data: {},
      method: 'GET', // OPTIONS, GET, HEAD, POST, PUT, DELETE, TRACE, CONNECT
      // header: {}, // 设置请求的 header
       header: {  
        "Content-Type": "application/json"  
      },  
      success: function(res){
        // success
        that.setData({
            mydata:res.data
        })
        console.log(res.data);
        // console.log(mydata);
        console.log("加载成功");
      },
      fail: function() {
        // fail
      },
      complete: function() {
        // complete
      }
    })
    
   },
  

  onShareAppMessage: function() {
    // 用户点击右上角分享
    return {
      title: 'title', // 分享标题
      desc: 'desc', // 分享描述
      path: 'path' // 分享路径
    }
  }

  

})