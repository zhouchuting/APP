## 导航栏切换的实现

#### **homePage.wxml **

- ##### <u>导航栏</u>

`<view  animation="{{animation}}"  class="topTypeListClass {{index==curpage?'curPage':''}}"  bindtap="typeClick"  id="{{index}}" data-idx="{{item.category}}">`

​            `{{item.name}}`

 `</view>`

1. 关联了一个函数typeClick，这样点击导航栏的时候就会出发typeClick函数，
2. 设定的属性data-idx

- ##### <u>新闻cell</u>

`<block wx:for="{{detaildata}}">`

​      `<view class="cellClass" wx:if="{{item.category==category}}">`

1. 遍历新闻列表detaildata，将新闻数据放在这个列表里面；
2. 在typeClick函数中获得idx的值，并与设置好的新闻列表中的category比较，可以得到category一致的新闻数据；

#### **homePage.js**

`var idx = e.currentTarget.dataset.idx;`

//获取当前点击对象的idx，data-idx可以自己命名为data-xxx

​    `console.log(idx);`

​    `var that = this;`

​    `that.setData({`

​      `curpage: e.target.id`

​    `});`

​    `// 初始化页码从0开始`

​    `this.setData({`

​      `listpage: 0`

​    `});`

​    `console.log("curpage=", this.data.curpage);`

​    `console.log("listpage==", this.data.listpage);`

​    `//设置分类`

​    `this.setData({`

​      `category: idx` //将category赋值为获取到的点击栏目的idx

​    `});`

### 最后实现效果

