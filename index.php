<?php
include 'Stack.php';
//Tạo stack
$stack = new Stack(10);
try {
    //Thêm 5 phần tử vào stack
    $stack->push(1);
    $stack->push(2);
    $stack->push(3);
    $stack->push(4);
    $stack->push(5);
//Lấy ra lần lượt 3 phần tử
    $stack->pop();
    $stack->pop();
    $stack->pop();
//Thêm 2 phần tử mới vào stack
    $stack->push(8);
    $stack->push(9);
//Kiểm tra xem stack có rỗng hay không
    if ($stack->isEmpty()) {
        echo 'Stack is empty.' . '<br>';
    } else {
        echo "Stack isn't empty." . '<br>';
    }
//Lấy ra 4 phần tử khỏi stack
    $stack->pop();
    $stack->pop();
    $stack->pop();
    $stack->pop();
//Kiểm tra xem stack có rỗng hay không
    if ($stack->isEmpty()) {
        echo 'Stack is empty.' . '<br>';
    } else {
        echo "Stack isn't empty." . '<br>';
    }
//Kiểm tra xem stack da full chua
    if ($stack->isFull()) {
        echo 'Stack is full.' . '<br>';
    } else {
        echo "Stack isn't full." . '<br>';
    }
//Hiển thị phần tử trên cùng của stack
    echo $stack->top();
} catch (Exception $exception) {
    echo $exception->getMessage();
}

