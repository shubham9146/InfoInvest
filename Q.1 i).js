/*Write a program to demonstrate
 i. Singly linked list with following operations
Create, Insert, Delete, Display, Reverse*/

class LinkedList
{
  constructor()
  {
    this.list=null
  }

  create(ele)
  {
    if(this.list==null)
      this.list=new newNode(ele)
    else
    {
      var temp=this.list
      while(temp.next!=null)
        temp=temp.next
      temp.next=new newNode(ele)
    }
  }
  insert(ele, pos)
  {
    var new_node=new newNode(ele)
    if(pos==1)
    {
      new_node.next=this.list
      this.list=new_node
    }
    else
    {
      var temp=this.list
      var i=2
      while(i!=pos && temp.next!=null)
      {
        temp=temp.next
        i++
      }
      new_node.next=temp.next
      temp.next=new_node
    }
  }
  del(ele)
  {
    var temp=this.list
    var prev=null
    while(temp.data!=ele && temp.next!=null)
    {
      prev=temp
      temp=temp.next
    }
    if(temp.data==ele)
    {
      if(prev!=null)
        prev.next=temp.next
      else
        this.list=this.list.next
      temp=null
    }
    else 
      console.log("Element not present in the list")
      
      
  }
  reverse()
  {
    var fwd=this.list
    var curr=null
    var back=null
    while(fwd)
    {
      back=curr
      curr=fwd
      fwd=fwd.next
      curr.next=back
    }
    this.list=curr
  }
  display()
  {
    var temp=this.list
    console.log("The list elements are...")
    while(temp!=null)
    {
      console.log(temp.data)
      temp=temp.next
    }
  }
}
class newNode{
  constructor(data, next)
  {
    this.data=data
    this.next=null
  }
}


list=new LinkedList()
list.create(10)
list.create(20)
list.create(30)
list.create(40)
list.create(50)
list.display()
list.insert(55,800)
list.display()
list.del(55)
list.display()
list.del(67)
list.reverse()
list.display()


