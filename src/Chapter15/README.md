# chapter15 就不能不换 DB 吗？ --- 抽象工厂模式

**抽象工厂模式(Abstract Factory)，** 提供一个创建一系列相关或相互依赖对象的接口，而无需指定他们具体的类。

> 在本例中，将数据库操作的一些具体实例抽象出来，在 **客户端只调用对应的抽象** ,实现了解耦。

> 总结下来，在客户端要少用具体的类，而是要用抽象类，这样在进行一些需求变更时，才会更加灵活。
