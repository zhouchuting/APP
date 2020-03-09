## 微信小程序

[]代表数组

#### 一、页面创建

1. 全局三个文件，分别是app.js、app.json、app.wxss（名称不可更改）
2. 创建Pages目录文件
3. 创建页面
   - js：页面逻辑实现
   - json：负责标题栏和一些状态栏
   - wxml：管理页面信息
   - wxss：管理页面样式

4. 把内容单元封装在view内部，写法：<view></view>

5. 组件：图片、文字和按钮

   - 图片<image></image>

   - 文字<text></text>

   - 按钮<button></button>

     属性内容open-type和bindgetuserinfo

6. js文件中函数的定义方法：

   函数名+“:“+function（参数列表）{

   },

7. wxml中变量写法：{{“变量名称”}} 

8. js中定义变量的方法：在data:{“定义变量”}

   修改data变量的方法：this.setData

   

### 二、样式基础

iPhone6：1rpx=0.5

2. 常用属性

   background-color

   fout-size

   border

   width

   height

3. flex布局

   -    **容器属性**

     - **flex-direction：**用于设置主轴方向，通过设置坐标轴可以规定项目的排列方向

     `.container{`

     ​    `display:flex;`

     ​    `flex-direction: row|row-reverse|column|column-reverse`

     `}`

     1. <u>row</u>：默认值，主轴在水平方向上从左到右，项目按照主轴方向从左到右排列
     2. <u>column</u>：主轴在垂直方向上从上而下，项目按照主轴方向从上往下排列

     - **justify-content**：用于设置项目在主轴方向上的对齐方式，以及分配项目之间及其周围多余空间
       1. flex-star/flex-end
       2. center
       3. space-around：第一个项目离主轴起点和最后一个项目离终点的距离为中间项目间距的一半
       4. space-between：项目间距相等，第一个和最后一个项目分别离起点/终点的距离为0

     - **align-items**：用于设置项目在行中的对齐方式
       1. stretch：默认值，未设置项目尺寸时将项目拉伸至填满交叉轴
       2. flex-start：项目顶部与交叉轴起点对齐
       3. flex-end：项目底部与交叉轴终点对齐
       4. center：项目在交叉轴居中对齐
     - **align-content**：用于<u>多行排列</u>时设置项目在交叉轴方向上的对齐方式
     - **flex-wrap**：用于规定是否允许项目换行



