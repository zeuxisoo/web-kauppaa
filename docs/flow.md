# P2P

A simple documentation for the project of P2P.

## 基本介紹

網址有 2 組

1. 網站前台 [https://ku.comma.party](https://ku.comma.party)
2. 管理後台 [https://ku.comma.party/admin](https://ku.comma.party/admin)

帳號有 3 組

1. 普通帳戶 (user / 12345678)
2. 金主帳戶 (financier / 12345678)
3. 管理帳戶 (admin / 12345678)

備注

1. 所有帳戶都可以由前台的登入界面登入, 但登入後會自動導向到對應的平台界面

	例如: 用 `管理帳號` 在前台登入後,會自動導向到 `管理後台` 界面
	
2. 只有 `管理帳戶` 才可以登入 `管理後台`, 其他帳號均不可以登入

## 操作流程

在此之前, 你需先了解以下的資料

1. 申請狀態目前會分為以下幾種

	- 等待中 (waiting) - 當用戶提交申請表後, 該申請會被設為此狀態
	- 審核中 (reviewing) - 當管理員在後台審核中, 該申請會被設為此狀態
	- 已公開 (published) - 當管理員在後台審核完成並批準, 該申請會被設為此狀態
	- 已配對 (matched) - 當金主在公開列表中提出想投資後, 該申請會被設為此狀態
	- 已批準 (approved) - 當管理員確認金主和債貸人的投資配對關係後, 該申請會被設為此狀態
	- 已完成 (completed) - 當管理員確認所有東西都完成後, 該申請會被設為此狀態
	- 被拒絕 (rejected) - 當管理員拒絕金主和債貸人的投資配對關係後, 該申請會被設為此狀態

### 普通帳號

1. 用戶登入後, 會看見上方導行欄多出一個 `Apply` 的連結
2. 點擊 `Apply` 之後會看見目前已提出的 **申請列表**
3. 當需要提出申請時, 用戶需點擊 `Apply It` 按鈕進入 **申請表格**
4. 當用戶填寫完所有資料並上傳相應的圖片後, 便可以按下 `Submit` 提交申請, 並等待 **管理員** 審核
5. 如果審檢通過, 此時用戶的提交便會顯示於剛才的 **申請列表** 頁面

### 金主帳號

1. 用戶登入後, 會看見上方導行欄多出一個 `Application` 的連結
2. 點擊 `Application ` 之後會看見左邊分為 3 個部份

	- 已分開的申請 (All Published)
	- 我已申請投資的 (My Matched)
	- 我已被批準的 (My Approved)

3. 用戶可以通過 `All Published` 去查看目前公開的申請表, 並選擇想要投資的申請
4. 當用戶表下公開申請表中的 `investment` 按鈕後, 此申請就會進入到 `My Matched` 列表中, 並等待 **管理員** 審核
5. 當審核通過後, 此時的申請表便會移到 `My Approved`

### 管理帳號

管理界面目前分別可以管理如下項目

- 網站內容 (Site)

	- 修改關於我們 (About Us)
	- 修改聯絡我們 (Contact Us)

- 網站公告 (News)

	- 新增 (Create)
	- 刪除 (Manage - Delete)
	- 修改 (Manage - Edit)

- 申請列表 (Applies)

	- 管理等待中的申請
	- 管理審核中的申請
	- 管理已公開的申請
	- 管理已配對的申請
	- 管理已批準的申請
	- 管理已完成的申請
	- 管理被拒絕的申請