# Chapter2 商场促销 --- 策略模式

**策略模式(Strategy)：**它定义了算法家族，让他们之间可以互相替换，此模式让算法的变化，不会影响到使用算法的客户

**v1**

- 使用简单工厂来实现商场促销

> 使用了简单工厂来创建各个促销策略

**v2**

- Strategy 策略模式的基本代码

> 使用抽象的 strategy，并且由各个具体的策略类来实现 abstract strategy 的 algorithm。 


<p align="center">
<img src="https://raw.githubusercontent.com/rovast/rovast-github-assets/master/images/uml_2018111602.jpg" 
  width="600">
</p>

### 总结

策略模式就是用来封装算法的，但在实践中，我们发现可以用它来封装几乎任何类型的规则，只要在分析过程中听到需要在不同时间应用不同的业务规则，
就可以考虑使用策略模式处理这种变化的可能性。
