<?php
// 간단한 환영 메시지
$welcomeMessage = "홈페이지에 방문해 주셔서 감사합니다!";
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>간단한 홈페이지</title>
</head>
<body>
    <!-- 헤더 영역 -->
    <header>
        <h1>나의 간단한 홈페이지</h1>
        <nav>
            <ul>
                <li><a href="#">홈</a></li>
                <li><a href="#">소개</a></li>
                <li><a href="#">서비스</a></li>
                <li><a href="#">연락처</a></li>
            </ul>
        </nav>
    </header>

    <!-- 본문 영역 -->
    <main>
        <h2>환영합니다!</h2>
        <p><?php echo $welcomeMessage; ?></p>
    </main>

    <!-- 푸터 영역 -->
    <footer>
        <p>&copy; 2024 간단한 홈페이지</p>
    </footer>
</body>
</html>
