$x = strcmp("x54321","x5678");
if ($x > 0) {
    print '���ڿ� "x54321"�� ���ڿ� "x5678"���� ũ��.';
} elseif ($x < 0) {
    print '���ڿ� "x54321"�� ���ڿ� "x5678"���� �۴�.';
}

$x = strcmp("54321","5678");
if ($x > 0) {
    print '���ڿ� "54321"�� ���ڿ� "5678"���� ũ��.';
} elseif ($x < 0) {
    print '���ڿ� "54321"�� ���ڿ� "5678"���� �۴�.';
}

$x = strcmp('6 pack','55 card stud');
if ($x > 0) {
    print '���ڿ� "6 pack"�� ���ڿ� "55 card stud"���� ũ��.';
} elseif ($x < 0) {
    print '���ڿ� "6 pack"�� ���ڿ� "55 card stud"���� �۴�.';
}

$x = strcmp('6 pack',55);
if ($x > 0) {
    print '���ڿ� "6 pack"�� ���� 55���� ũ��.';
} elseif ($x < 0) {
    print '���ڿ� "6 pack"�� ���� 55���� �۴�.';
}