# Chapter1 代码无错就是优？ -- 简单工厂模式

场景：实现一个简单计算器的功能。

**v1**

- 面向过程

**v2**

- 增加异常处理
- 规范命名

**v3**

- 将 operation 抽离为类，使业务和界面交互分离

**v4**

- 使用简单工厂模式进行分离业务和界面，更加便于拓展

<p align="center">
<img src="https://raw.githubusercontent.com/rovast/rovast-github-assets/master/images/uml_201811062124.jpg" 
  width="500">
</p>


## 总结

> v1 v2 是面向过程的编码方式。将客户端「client」和实际的逻辑杂糅在了一起，这种写法虽然来得快，但是在处理后期需求更改时较为吃力。<br>
> v3 v4 使用了面向对象的编程方式。不同的是 v4 将各个操作类抽离出来，这样再后期增加新的运算时，并不会影响到已经完成的类，并且使用工厂来动态实例化。

使用一个单独的类来创造实例的过程，这就是工厂。<br>
在计算器的例子中，我们的运算方法是使用一个工厂类动态实例化出来的。<br>
通过「多态」，返回父类的方式实现了计算器的结果。<br>