if ($logged_in) {
// �� �κ��� $logged_in�� ���� �� ����˴ϴ�.
    print "ȯ���մϴ� ��ȸ����.";
} elseif ($new_messages) {
// �� �κ��� $logged_in�� �����̸鼭 $new_messages�� ���� �� ����˴ϴ�.
    print "�湮�ڴ�, ���ο� �޽����� �ֽ��ϴ�.";
} elseif ($emergency) {
// $logged_in�� $new_messages�� �����̰�
// $emergency�� ���̸� �� �κ��� ����˴ϴ�.
    print "�湮�ڴ�, ���ο� �޽����� �����ϴٸ�, ��� ��Ȳ�Դϴ�.";
} else {
// $logged_in�� $new_messages�� �����̰�
// $emergency���� ��� �����̶�� �� �κ��� ����˴ϴ�.
    print "�������� �𸣰�����, ���ο� �޽����� ����, ��� ��Ȳ�� �ƴմϴ�.";
}