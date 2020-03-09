### JSON数据格式

1. 什么是JSON？

   JSON是一种轻量级的数据交换格式，比起其他格式更易于人的理解和编写，也适用于机器解析。

2. JSON的基本语法

   - 键值对的无序集合
   - 值的有序列表

   **JSON 表示数字**：2.90

   **JSON 表示字符串**："Hello world"

   **JSON 表示对象**：
   `{`
   　　`"name":"smith".`
   　　`"age":30,`
   　　`"sex":"男"`
   `}`

   JSON对象的属性可以是对象
   `{`
   　　`"name":"smith".`
   　　`"age":28,`
   　　`"sex":"男"`
   　　`"school":{`
   　　`"sname":"南京大学".`
   　　`"address":"南京市鼓楼区汉口路22号"`
   `}`
   }

   **JSON 格式表示数组**：
   保存名字的数组: ["张三","李四","王五"]
   保存雇员的信息:

    ["smith",1001,"clerck",7788,2000.00,200.0]
   [
   　　["smith",1001,"clerck",7788,2000.00,200.0]
   　　["smith",1001,"clerck",7788,2000.00,200.0]
   　　["smith",1001,"clerck",7788,2000.00,200.0]
   ]
   [
   　　{"name":"smith","empno":1001,"job":"clerck","sal":9000.00,"comm":5000.00},
   　　{"name":"smith","empno":1001,"job":"clerck","sal":9000.00,"comm":5000.00},
   　　{"name":"smith","empno":1001,"job":"clerck","sal":9000.00,"comm":5000.00},
   ]

   **对象数组**
   在一个数组保存多个 json 对象 (在一个数组中保存多个对象)
   [
   　　{
   　　　　"title":"Java 开发",
   　　　　"edition":3,
   　　　　"author":["smith","张三","李四"]
   　　},
   　　{
   　　　　"title":"Web 开发",
   　　　　"edition":3,
   　　　　"author":["Allen","王五","赵六"]
   　　}
   ]

