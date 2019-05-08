# middleware
用作应用与逻辑服务器间的通信

### 配置环境变量的说明

LOGIC_AUTHORIZATION_CODE: 逻辑服务器的Authorization Bearer

LOGIC_HOST: 逻辑服务器URL地址，约定以"/"结尾

LOGIC_API_VERSION: API版本标识，约定以"/"结尾，必须和 $this->url 配合使用

