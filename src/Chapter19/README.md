# chapter19 分公司=一部门 --- 组合 模式

**组合模式(Composite)，** 将对象组合成树形结构以表示"部分 - 整体"的层次结构。
组合模式使得用户对单个对象和组合对象的使用具有一致性。

> 在本例中，不论是总公司还是分公司，各个职能部门做的事情是一致的。则可以把各个部门写成各个
> 叶子。然后公司使用 add 或者 remove 对职能部门进行增减。同时分公司也可以作为总公司的叶子。