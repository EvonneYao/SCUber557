@extends('layouts.black')

@section('title', 'SCUber557_black-test')

@section('style-black')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="{{ asset('css/style_go-or-leave.css') }}">
@endsection

@section('back-link', '/home')
@section('content-black')

<h4>Messages</h4>

<div class="grey darken-4" style="width: 100%;display: flex;flex-direction: column;align-items: center;height: 80vh;">
	<div class="pic">
		<svg width="267" height="195" viewBox="0 0 267 195" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M266.579 73.5748C263.274 98.2179 259.543 111.235 237.767 137.042C215.991 162.849 116.344 179.827 79.504 179.827C42.6644 179.827 -2.73626 151.419 0.129106 118.505C2.99447 85.5905 17.9435 58.6886 53.7247 55.3769C90.2913 51.9925 122.412 67.665 158.311 59.2595C189.348 51.9925 198.845 24.2933 220.162 15.5543C263.274 -2.1196 268.827 56.8101 266.579 73.5748Z" fill="#535AFF"/>
			<path d="M244.399 85.6106C243.181 87.6751 227.762 98.1215 218.409 99.6676C216.599 99.9668 214.623 100.069 213.051 99.1244C212.122 98.5662 211.43 97.6956 210.773 96.8342C209.27 94.8648 207.836 92.8425 206.474 90.7725C205.759 89.6847 205.05 88.5492 204.807 87.2701C204.163 83.8832 206.893 80.841 209.591 78.695C215.794 73.7619 223.056 70.1681 230.74 68.2294C232.1 67.8862 233.543 67.5956 234.89 67.9854C237.077 68.6181 238.385 70.8312 239.22 72.9496C240.054 75.0679 240.705 77.385 242.373 78.9347C242.754 79.2886 245.617 83.5461 244.399 85.6106Z" fill="#EDF6FF"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M161.549 175.61C146.584 178.169 153.717 167.293 155.78 153.68C159.171 131.311 163.353 97.3186 163.353 97.3186C163.353 97.3186 166.08 149.115 166.08 161.728C166.08 174.34 163.352 175.301 161.549 175.61Z" fill="#EDF6FF"/>
			<path d="M145.559 163.286C145.941 166.888 146.344 170.566 147.875 173.849C147.039 166.415 146.204 158.982 145.369 151.548C145.266 150.63 145.297 149.461 146.141 149.087C146.856 157.481 147.921 165.845 149.334 174.151C149.501 175.137 148.02 175.7 147.188 175.145C146.357 174.589 146.091 173.508 145.901 172.526C144.523 165.369 143.765 158.093 143.639 150.806C141.884 151.151 140.654 152.852 140.299 154.605C139.944 156.358 140.286 158.169 140.628 159.924C141.728 165.575 142.829 171.226 143.929 176.877C144.444 179.52 144.959 182.251 144.391 184.883C142.207 174.911 140.451 164.845 139.129 154.722C122.37 164.97 100.776 166.876 82.4809 159.721C78.4852 158.159 74.517 156.088 71.8779 152.705C69.799 150.041 68.6896 146.732 68.1084 143.403C66.0443 131.579 70.2741 119.517 76.0151 108.976C78.1935 104.977 80.6743 100.811 80.4985 96.2597C80.438 94.6928 80.1002 92.9579 81.0151 91.6845C81.1447 91.9202 75.0252 48.1462 77.4801 38.4635C83.39 15.1532 102.589 11.9963 114.881 12.2838C123.128 12.4767 175.407 22.8662 182.961 36.9948C192.888 55.5639 190.78 71.1757 189.017 81.4697C188.492 84.5351 163.36 97.0926 163.353 97.1561C161.916 110.513 152.274 139.618 144.187 150.346C144.644 154.66 145.102 158.973 145.559 163.286Z" fill="#EDF6FF"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M24.8865 108.936C20.1732 107.055 14.5564 107.613 10.3071 110.385C9.89569 110.653 9.30423 110.354 9.10058 109.907C8.89692 109.461 8.9731 108.942 9.07727 108.462C10.4344 102.217 15.8409 97.438 21.8534 95.2419C27.8659 93.0457 34.4426 93.0396 40.8339 93.415C41.4681 93.4523 42.131 93.5018 42.6719 93.8342C43.2129 94.1667 43.5768 94.8776 43.3072 95.4518C40.793 100.806 38.8991 106.449 37.6752 112.234C37.4768 113.173 36.5047 113.795 35.5474 113.873C34.5901 113.951 33.652 113.598 32.7832 113.189C30.0756 111.915 27.666 110.046 24.8865 108.936Z" fill="#EDF6FF"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M171.384 38.3112C171.577 35.3471 171.639 32.3745 171.57 29.405C158.477 22.808 144.228 18.6209 130.117 14.4927C141.045 18.8937 152.868 24.0876 158.21 34.5873C160.47 39.0303 161.329 44.0387 162.001 48.978C164.002 63.6634 164.613 78.5376 163.825 93.3377L182.873 84.0797C184.513 83.2826 186.234 82.4156 187.224 80.8846C188.151 79.4513 188.288 77.6629 188.379 75.9585C188.858 67.0253 188.826 58.0649 188.284 49.1353C187.032 48.5168 185.715 48.0206 184.394 47.6446C183.552 47.4047 182.696 47.2007 181.841 46.9967C179.85 46.5219 177.86 46.0475 176.043 45.122C173.446 43.799 171.194 41.2195 171.384 38.3112ZM137.266 14.5884C149.034 17.9065 160.802 21.6903 171.508 27.5353C171.266 21.748 170.525 15.9816 169.293 10.3217L169.25 10.1262C168.911 8.57545 168.563 6.98032 168.875 5.42829C169.566 1.99582 173.378 -0.0702347 176.878 0.00182515C180.379 0.073885 183.622 1.74489 186.719 3.37676C201.575 11.2026 216.699 19.2261 228.395 31.2729C228.762 41.0258 226.464 50.6503 224.195 60.1514L223.981 61.0444C223.295 63.9224 222.617 66.8025 221.949 69.6847C224.191 68.7973 226.49 68.0542 228.828 67.4644C230.188 67.1212 231.63 66.8305 232.978 67.2204C235.165 67.8531 236.473 70.0662 237.307 72.1846C237.445 72.5343 237.578 72.8895 237.711 73.2458C238.384 75.0471 239.068 76.8759 240.46 78.1697C240.499 78.2057 240.539 78.2415 240.578 78.2772L240.652 78.3436C240.981 78.6372 241.315 78.936 241.457 79.3464C241.627 79.8377 241.317 80.5252 240.799 80.4851C238.611 79.6532 237.42 77.3266 236.573 75.1439C236.513 74.9895 236.453 74.8342 236.394 74.6783C235.606 72.6292 234.781 70.4818 233.013 69.2139C231.683 74.5106 229.66 79.6326 227.01 84.4081C226.699 84.9702 226.342 85.5615 225.758 85.8285C225.304 86.0358 224.783 86.0132 224.284 85.9852C222.308 85.8739 220.332 85.7399 218.358 85.583C217.511 89.4368 216.68 93.2941 215.865 97.1548C216.31 97.0948 216.754 97.0092 217.185 96.9134C225.974 94.9639 233.546 89.5409 240.635 83.9912C241.08 83.6425 241.669 83.2759 242.169 83.5414C242.604 83.773 242.692 84.397 242.486 84.8456C242.281 85.2942 241.869 85.6071 241.472 85.9008C233.855 91.5439 225.85 97.3565 216.497 98.9026C216.158 98.9586 215.814 99.0077 215.467 99.0443C209.753 126.296 204.841 153.715 200.74 181.256C200.424 183.378 199.953 185.71 198.986 187.606L208.663 187.691C205.335 188.322 201.962 188.422 198.573 188.34C197.81 189.561 196.79 190.534 195.401 191.047C192.767 192.02 189.705 190.777 187.835 188.684C187.6 188.421 187.38 188.148 187.175 187.865C182.605 187.79 178.03 188.083 173.507 188.741C173.912 187.945 174.203 187.092 174.37 186.214C168.695 187.807 162.799 187.163 156.876 186.515C153.59 186.156 150.295 185.796 147.025 185.816C144.549 185.831 141.584 186.408 140.673 188.711L139.47 181.183L138.376 187.253C138.286 187.749 138.171 188.29 137.777 188.603C137.269 189.006 136.482 188.844 135.998 188.413C135.514 187.983 135.261 187.355 135.034 186.748C133.692 183.167 132.662 179.469 131.958 175.71C131.913 180.331 133.808 184.723 135.667 188.953L133.237 188.28L135.204 190.746C133.175 189.985 131.209 189.057 129.333 187.974L131.654 191.214C129.757 190.319 128.093 188.934 126.867 187.231C128.582 186.766 130.502 187.125 131.933 188.179C131.269 187.233 130.967 186.04 131.101 184.893L133.848 187.303C132.301 183.763 131.228 180.016 130.665 176.194C130.553 175.435 130.638 174.403 131.389 174.244C132.162 174.079 132.649 175.036 132.85 175.8L135.433 185.652L136.457 182.184C136.623 183.572 137.082 184.924 137.794 186.127C138.034 183.674 138.781 181.272 139.974 179.115L140.755 186.319C146.174 184.64 151.862 185.349 157.565 186.06C160.105 186.376 162.648 186.693 165.172 186.8C166.826 186.87 168.577 186.823 169.993 185.965C171.409 185.107 172.298 183.174 171.484 181.732C170.641 183.101 169.552 184.319 168.287 185.311C169.451 182.795 170.64 180.174 170.62 177.402L167.129 184.307L165.328 181.285C164.522 182.723 164.769 184.673 165.906 185.866L162.93 183.872L162.479 185.08C161.511 184.772 160.725 183.946 160.467 182.964C161.479 182.553 162.704 182.722 163.567 183.391L165.473 178.797L166.802 182.643C170.187 178.01 172.207 172.392 172.546 166.665L172.547 166.652C172.571 166.252 172.596 165.831 172.82 165.499C173.046 165.164 173.557 164.987 173.863 165.251L170.239 182.024C171.435 181.135 172.946 180.68 174.434 180.76C173.116 181.742 172.113 183.14 171.606 184.704C172.48 184.03 173.97 184.498 174.301 185.552C174.811 185.175 175.655 185.43 175.87 186.026C176.086 186.623 175.601 187.358 174.968 187.395L186.921 187.5C185.653 185.599 184.958 183.323 184.446 181.076C182.907 174.323 182.722 167.265 183.904 160.441C184.628 156.268 185.85 152.209 187.073 148.149L187.073 148.149C188.171 144.504 189.269 140.858 190.007 137.127C190.482 134.722 190.806 132.291 191.072 129.853C187.63 128.873 184.23 127.747 180.883 126.479C178.337 125.515 175.772 124.438 173.723 122.645C171.675 120.851 170.197 118.205 170.444 115.494C170.499 114.885 170.468 114.031 169.861 113.954C159.736 112.668 150.017 108.337 142.291 101.669C139.869 99.5791 137.45 96.6568 138.176 93.5417C138.47 92.2801 139.258 91.1919 140.112 90.2179C143.839 85.9681 149.242 83.2293 154.872 82.7355C149.904 85.0783 144.801 87.5191 141.099 91.5775C140.606 92.1179 140.132 92.6998 139.889 93.3895C139.114 95.5836 140.872 97.8104 142.595 99.3742C150.535 106.579 160.73 111.262 171.368 112.59C171.561 111.363 172.532 110.37 173.647 109.822C174.762 109.274 176.017 109.097 177.248 108.929C181.604 108.331 186.274 107.796 190.198 109.78C191.173 110.273 191.256 111.749 190.61 112.63C189.965 113.512 188.861 113.918 187.802 114.187C183.122 115.376 178.197 114.797 173.404 114.211C172.227 114.067 171.803 115.774 172.115 116.918C172.748 119.235 174.427 121.16 176.405 122.522C178.383 123.884 180.657 124.745 182.925 125.534C185.672 126.489 188.449 127.358 191.251 128.138C191.329 127.366 191.403 126.593 191.476 125.821C193.394 105.694 195.02 85.5395 196.354 65.3655C196.543 62.5147 196.715 59.5743 195.781 56.8741C194.631 53.5506 191.96 51.0734 188.804 49.4015C190.418 57.5393 191.116 65.8587 190.878 74.1516C190.804 76.7115 190.58 79.4409 189.017 81.4698C187.882 82.9439 186.182 83.853 184.534 84.7183L166.884 93.9906C160.066 97.5725 151.855 98.4119 144.453 96.2837L160.338 95.4569C160.77 95.4344 161.233 95.4007 161.572 95.1317C162.068 94.7383 162.106 94.0129 162.103 93.3799C162.024 77.7331 161.94 62.024 159.659 46.5441C158.941 41.6668 157.945 36.6712 155.206 32.5721C152.19 28.0579 147.382 25.1048 142.64 22.4604C134.134 17.717 124.905 13.398 115.169 13.6079C107.131 13.7811 99.4774 17.0447 92.4369 20.9271C86.8472 24.0095 81.1505 27.9262 78.9418 33.9152C77.7217 37.2236 77.7032 40.8382 77.762 44.3639C77.9715 56.9374 78.9765 69.4976 80.7689 81.9444C80.9641 83.2998 80.831 85.1637 79.4833 85.4068C77.7595 72.0601 76.0338 58.6896 75.5704 45.24C75.4361 41.3403 75.4264 37.3277 76.8195 33.6828C78.6971 28.7704 82.8899 25.1271 87.2356 22.1653C98.0712 14.7802 111.282 10.284 124.314 11.7439C128.712 12.2366 133.007 13.3874 137.266 14.5884ZM194.208 128.926L194.146 128.91L199.137 55.5863C199.216 54.4288 199.275 53.186 198.669 52.1966C198.052 51.1879 196.887 50.677 195.794 50.2252L188.331 47.1416C188.247 46.7586 188.161 46.3761 188.072 45.9941C188.099 46.3514 188.124 46.7089 188.149 47.0664L177.156 42.5236C177.09 40.9957 179.296 40.678 180.797 40.9712C185.983 41.9841 191.052 43.5912 195.873 45.751C197.157 46.3261 198.472 46.9781 199.332 48.0912C200.506 49.6103 200.609 51.6731 200.649 53.5926C201.163 78.8369 199 104.135 194.208 128.926ZM197.004 131.39C199.74 132.029 202.497 132.578 205.268 133.034C205.818 133.124 206.573 133.082 206.689 132.537C204.769 131.267 202.458 130.783 200.199 130.31L199.833 130.233C198.976 130.053 198.121 129.864 197.268 129.668C197.626 127.347 197.997 125.029 198.383 122.713C198.808 120.164 199.249 117.616 199.69 115.069C201.085 107.021 202.48 98.9716 203.344 90.8518C203.431 90.0356 203.513 89.2189 203.589 88.4019C203.878 88.9551 204.22 89.4868 204.562 90.0075C205.923 92.0775 207.357 94.0997 208.86 96.0692C209.518 96.9306 210.21 97.8012 211.138 98.3594C211.765 98.7361 212.456 98.9463 213.175 99.044L196.9 184.826C196.719 185.781 196.417 186.862 195.825 187.578L194.337 187.565C191.748 178.959 192.413 169.704 193.313 160.74C194.298 150.928 195.529 141.141 197.004 131.39ZM177.676 32.7174C176.492 32.0255 175.295 31.3577 174.088 30.7123C174.257 33.8671 174.227 37.0202 173.853 40.1699C175.263 40.6536 176.836 39.6602 177.52 38.3361C178.204 37.012 178.222 35.4566 178.224 33.9664L178.271 7.09445C178.274 5.45211 178.136 3.53119 176.767 2.62371C175.231 1.60511 173.011 2.65511 172.155 4.28784C171.299 5.92057 171.429 7.87517 171.623 9.70839C171.908 12.3964 172.282 15.0859 172.657 17.7757L172.657 17.7764L172.657 17.7772L172.657 17.7779L172.657 17.7786L172.657 17.7793L172.657 17.78L172.657 17.7807C173.175 21.497 173.692 25.214 173.973 28.9291C174.552 29.2682 175.127 29.6139 175.698 29.9664C176.721 30.5971 177.867 31.5312 177.676 32.7174ZM223.444 44.9186L218.456 71.2059C214.625 73.0309 211 75.2884 207.679 77.93C206.367 78.9736 205.047 80.2292 204.112 81.6334C204.761 71.1078 204.7 60.5356 204.543 49.985C204.526 48.824 204.493 47.6073 203.921 46.597C203.22 45.36 201.857 44.6777 200.56 44.095C194.12 41.2005 187.369 38.9992 180.461 37.5414C180.301 26.7155 180.669 15.8818 181.564 5.09173C192.329 9.49072 202.663 14.942 212.371 21.3425C217.414 24.6673 222.645 28.7649 223.971 34.658C224.729 38.024 224.087 41.5288 223.444 44.9186ZM215.77 85.3641L213.534 97.1506C213.064 97.0656 212.61 96.9171 212.184 96.6849C211.062 96.0746 210.305 94.9771 209.59 93.9192L205.156 87.359C204.782 86.8064 204.395 86.2125 204.381 85.5457C204.368 84.879 204.906 84.1578 205.568 84.2438C208.961 84.6851 212.362 85.0586 215.77 85.3641ZM206.094 81.8003L216.232 82.9315L218.027 73.4668C217.446 73.7432 216.867 74.0245 216.29 74.3107C212.478 76.2034 208.662 78.4062 206.094 81.8003ZM221.433 71.9167C220.566 75.6832 219.714 79.4533 218.878 83.2268L221.575 83.5277C222.547 83.6362 223.597 83.7293 224.441 83.2351C225.104 82.8468 225.525 82.1582 225.905 81.4898C228.167 77.5019 229.919 73.2244 231.103 68.7947C229.835 68.6555 228.58 69.0835 227.383 69.5254C225.378 70.2659 223.393 71.0635 221.433 71.9167ZM194.527 188.177C194.695 188.186 194.863 188.194 195.031 188.202C194.891 188.265 194.741 188.313 194.58 188.342C194.562 188.287 194.544 188.232 194.527 188.177ZM189.906 167.693C189.504 174.306 189.717 180.958 190.542 187.532L190.41 187.531C188.576 185.077 188.081 181.869 187.811 178.806C186.742 166.699 188.204 154.374 192.075 142.852C191.965 147.585 191.441 152.292 190.917 156.999C190.52 160.559 190.124 164.12 189.906 167.693ZM192.698 136.046C193.321 135.767 193.583 134.892 193.215 134.317C192.583 134.629 192.314 135.512 192.666 136.123L192.698 136.046ZM145.559 163.286C145.941 166.888 146.344 170.566 147.875 173.849L145.369 151.548C145.266 150.63 145.297 149.461 146.141 149.087C146.856 157.481 147.921 165.845 149.334 174.151C149.501 175.137 148.02 175.7 147.189 175.145C146.357 174.589 146.091 173.508 145.902 172.526C144.523 165.369 143.765 158.093 143.639 150.806C141.885 151.151 140.654 152.853 140.299 154.605C139.944 156.358 140.286 158.169 140.628 159.924L143.93 176.877C144.444 179.52 144.959 182.251 144.391 184.883C142.207 174.911 140.451 164.845 139.13 154.722C122.371 164.97 100.776 166.876 82.4811 159.721C78.4854 158.159 74.5172 156.088 71.8781 152.705C69.7991 150.041 68.6898 146.732 68.1086 143.403C66.0445 131.579 70.2743 119.517 76.0153 108.976C76.1648 108.702 76.3158 108.426 76.4673 108.15C78.5218 104.403 80.6624 100.498 80.4987 96.2597C80.4879 95.9796 80.4682 95.6942 80.4484 95.4069C80.3574 94.0873 80.2639 92.7303 81.0153 91.6845C82.0232 93.5181 82.407 95.6876 82.0895 97.7557C99.4396 97.009 116.815 96.8586 134.176 97.3049C134.378 98.1031 133.222 98.4738 132.399 98.4616C116.198 98.2199 99.9887 98.4959 83.8052 99.289C83.2927 99.3141 82.7547 99.3475 82.3202 99.6204C81.8632 99.9074 81.5969 100.411 81.3512 100.892C76.7581 109.879 72.15 118.996 69.9299 128.842C68.7882 133.905 68.3509 139.446 70.6909 144.079C71.5786 145.837 72.8341 147.389 74.2359 148.771C81.7614 156.194 93.0305 158.47 103.599 158.292C110.345 158.179 117.075 157.209 123.578 155.414C130.473 153.511 137.348 150.511 142.054 145.125C144.818 141.962 146.696 138.131 148.341 134.267C151.482 126.888 153.891 119.198 155.521 111.345C156.542 111.56 156.556 113.004 156.321 114.02C153.406 126.596 150.018 140 140.417 148.628C131.745 156.422 119.526 158.838 107.886 159.49C101.162 159.867 94.3316 159.749 87.8188 158.035C81.306 156.321 75.0874 152.892 70.9528 147.576C72.1587 152.174 76.2435 155.456 80.4962 157.579C91.6623 163.155 104.848 162.86 117.177 160.922C125.39 159.631 133.82 157.512 140.212 152.195C145.676 147.651 149.157 141.16 151.778 134.555C154.679 127.243 156.692 119.579 157.757 111.785C158.42 111.366 158.912 112.538 158.828 113.318C157.391 126.676 152.274 139.618 144.187 150.346L145.559 163.286ZM171.789 186.32C171.667 186.173 171.668 185.939 171.791 185.793L171.889 185.83C172.055 185.434 172.751 185.467 172.878 185.876C172.557 186.108 172.181 186.261 171.789 186.32ZM178.108 112.947C176.463 112.664 174.782 112.588 173.118 112.722C173.927 111.186 175.902 110.781 177.622 110.547C181.36 110.038 185.252 109.542 188.834 110.727C189.071 110.805 189.323 110.905 189.451 111.119C189.62 111.401 189.497 111.784 189.257 112.008C189.018 112.232 188.691 112.334 188.375 112.423C185.048 113.353 181.513 113.533 178.108 112.947ZM123.665 190.434C126.419 190.357 129.189 190.965 131.656 192.189C130.997 193.137 129.671 193.27 128.517 193.314L98.3564 194.459C98.08 194.424 98.0279 193.997 98.2237 193.799C98.4195 193.601 98.7256 193.576 99.0038 193.562L128.446 192.126C126.745 191.97 125.086 191.383 123.665 190.434ZM65.622 90.6858C65.1922 92.7413 66.9312 94.9343 69.0254 95.0898C65.6009 100.251 59.4322 102.798 53.5051 104.596C49.8058 105.718 45.7024 106.639 42.1759 105.056C41.7382 105.323 42.2049 105.982 42.667 106.204C46.0988 107.858 50.1676 106.937 53.8181 105.847C59.1714 104.25 64.6896 102.185 68.3323 97.9491C68.4815 97.7756 68.6301 97.5969 68.7798 97.4171C69.7173 96.2903 70.695 95.1152 72.1046 94.8545C76.643 94.0152 80.4229 91.1726 84.1578 88.3639L84.1581 88.3637L84.1584 88.3634L84.1588 88.3632L84.1591 88.363C85.0058 87.7262 85.8503 87.0912 86.7007 86.4816C91.872 82.7752 97.6077 79.8576 103.649 77.8606C104.182 77.6842 104.831 77.3568 104.783 76.797C97.2939 77.4844 90.7473 81.9507 84.7109 86.4371L84.5096 86.5868C80.4071 89.6366 76.1201 92.8236 71.0723 93.5795C72.7212 92.2791 72.373 89.274 70.5127 88.2998C68.6524 87.3256 66.0518 88.6303 65.622 90.6858ZM67.0196 91.9419C66.683 90.9448 67.2026 89.7586 68.1259 89.2536C68.3881 89.1102 68.6813 89.0148 68.9801 89.0145C69.9661 89.0135 70.6862 90.0682 70.6927 91.0542C70.6992 92.0402 70.1993 92.9497 69.7135 93.8077C68.5772 93.6338 67.3873 93.0311 67.0196 91.9419ZM179.091 69.9701C178.812 69.6593 178.898 69.2406 178.986 68.8069C179.049 68.5005 179.114 68.1865 179.052 67.8979C178.998 67.6475 178.852 67.4344 178.706 67.2205C178.576 67.0313 178.446 66.8416 178.38 66.6251C178.395 66.339 178.777 66.1922 179.038 66.3109C179.299 66.4296 179.445 66.7095 179.536 66.9812C179.868 67.9726 179.697 69.1184 179.091 69.9701ZM153.843 48.2154C154.541 46.5608 155.924 45.0936 157.688 44.7578C158.259 44.6491 158.241 43.708 157.741 43.4121C157.241 43.1163 156.599 43.2912 156.074 43.5409C153.63 44.7042 152.087 47.2648 151.482 49.9031C150.878 52.5414 151.078 55.2891 151.281 57.9881L152.362 72.3346C152.398 72.8224 152.443 73.3346 152.715 73.7414C153.268 74.5701 154.455 74.5961 155.449 74.5329L160.482 74.2132C159.363 73.3367 157.862 72.9677 156.465 73.2258C155.648 73.3765 154.829 72.8382 154.396 72.1298C153.964 71.4215 153.837 70.5738 153.73 69.7508C153.028 64.3666 152.771 58.9246 152.961 53.4982C153.024 51.7037 153.145 49.8699 153.843 48.2154ZM166.694 175.559C166.408 175.766 166.121 175.294 166.08 174.943C164.135 158.594 163.842 142.099 163.55 125.637L163.354 114.539C163.348 114.223 163.353 113.876 163.556 113.634C163.906 113.217 164.642 113.408 164.947 113.859C165.253 114.309 165.253 114.893 165.243 115.437C164.943 131.636 165.14 147.867 166.691 163.995C166.71 164.191 166.729 164.388 166.748 164.584C167.104 168.248 167.465 171.967 166.694 175.559ZM150.523 72.5025C150.097 72.2685 149.572 72.401 149.106 72.5388C127.543 78.9163 106.03 85.4922 84.833 92.9977C84.4362 93.1382 83.9824 93.3405 83.8914 93.7515C83.795 94.1867 84.2047 94.6025 84.6431 94.6832C85.0815 94.7639 85.525 94.6072 85.9433 94.4533C107.186 86.6388 128.748 79.6936 150.558 73.6408C151.026 73.5108 150.95 72.7365 150.523 72.5025Z" fill="#00160A"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M227.349 170.057C226.847 170.278 226.304 170.483 225.763 170.39C225.223 170.297 224.717 169.79 224.826 169.252C225.818 164.338 224.572 159.017 221.501 155.054C220.425 153.665 219.144 152.443 218.095 151.034C217.434 150.145 216.846 149.028 217.182 147.973C217.658 146.472 219.579 146.106 221.151 145.999C224.805 145.75 228.458 145.501 232.112 145.252C233.796 145.137 235.735 145.12 236.859 146.379C239.987 149.883 246.085 150.119 249.474 146.866C249.999 146.363 250.659 147.365 250.638 148.091C250.573 150.376 249.631 152.625 248.049 154.274C247.676 154.664 247.199 155.045 246.662 154.989C246.126 154.933 245.73 154.163 246.158 153.835C247.075 153.13 248.01 152.407 248.653 151.446C249.296 150.484 249.608 149.224 249.17 148.153C246.809 151.139 244.427 154.107 242.021 157.057C237.851 162.172 233.391 167.403 227.349 170.057ZM233.94 155.007C233.339 155.173 232.699 155.045 232.1 154.876C227.787 153.657 223.814 150.288 219.403 151.076C224.546 155.219 227.278 162.165 226.333 168.702C229.722 167.976 232.398 165.446 234.799 162.946C238.352 159.245 241.725 155.372 244.904 151.345C242.619 151.327 240.343 150.668 238.402 149.463C236.004 150.056 236.321 154.348 233.94 155.007ZM237.072 148.203C235.643 146.519 233.076 146.571 230.876 146.764C228.006 147.016 225.136 147.268 222.267 147.52C221.102 147.622 219.764 147.827 219.156 148.826C224.123 149.866 228.965 151.499 233.547 153.68C234.136 151.829 235.317 150.171 236.874 149.01C237.05 148.879 237.25 148.712 237.227 148.495C237.215 148.383 237.144 148.288 237.072 148.203Z" fill="#FFB61D"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M24.3307 108.041C20.0086 106.313 14.858 106.825 10.9614 109.372C10.5842 109.618 10.0418 109.344 9.85509 108.933C9.66835 108.523 9.7382 108.046 9.83372 107.606C11.0782 101.868 16.0359 97.4782 21.5493 95.4607C27.0627 93.4432 33.0934 93.4375 38.9542 93.7824C39.5358 93.8166 40.1436 93.8621 40.6396 94.1676C41.1357 94.473 41.4695 95.126 41.2222 95.6535C38.9167 100.572 37.18 105.756 36.0577 111.071C35.8758 111.933 34.9844 112.505 34.1065 112.577C33.2287 112.648 32.3685 112.324 31.5718 111.948C29.089 110.778 26.8794 109.061 24.3307 108.041ZM24.8246 102.236C24.4394 102.549 23.8373 102.384 23.4749 102.044C23.1124 101.705 22.9059 101.236 22.621 100.83C21.0928 98.65 17.586 98.8309 15.5073 100.494C13.4286 102.157 12.4228 104.785 11.5068 107.285C17.6052 104.636 25.1163 105.587 30.3625 109.671C31.0788 110.229 31.7895 110.857 32.6716 111.072C33.5536 111.287 34.6647 110.901 34.8882 110.021C36.0817 105.321 37.5524 100.691 39.2903 96.1631C35.9558 100.308 28.9532 98.8816 24.8246 102.236ZM23.4977 99.7311C23.8401 100.161 24.4619 100.276 25.0032 100.178C25.5444 100.081 26.0362 99.8117 26.5405 99.5925C28.2768 98.8378 30.2 98.6694 32.0615 98.3243C33.9231 97.9791 35.8432 97.3951 37.1536 96.0286C34.1969 96.0197 31.2401 96.0109 28.2834 96.002C25.312 95.993 22.11 96.056 19.7229 97.8255C21.176 97.8785 22.5921 98.5934 23.4977 99.7311Z" fill="#FFB61D"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M163.188 107.645C163.181 105.044 163.174 102.443 163.167 99.8427C163.165 99.0958 163.163 98.349 163.161 97.6021C163.16 97.087 163.246 96.4426 163.735 96.2824C164.106 96.1613 164.513 96.4273 164.686 96.7763C164.859 97.1253 164.857 97.5319 164.851 97.9214C164.797 101.551 164.743 105.18 164.689 108.809C164.682 109.331 164.594 109.974 164.105 110.157C163.29 109.695 163.19 108.582 163.188 107.645H163.188Z" fill="#00160A"/>
			<path fill-rule="evenodd" clip-rule="evenodd" d="M157.996 105.238C157.619 105.403 157.425 104.783 157.483 104.376C157.691 102.92 157.9 101.46 158.254 100.032C158.475 99.1434 158.793 98.208 159.527 97.6605C160.261 97.113 161.522 97.2088 161.881 98.0513C162.055 98.4594 161.983 98.9257 161.903 99.3621C161.408 102.064 160.743 104.734 159.911 107.352C159.875 107.463 159.837 107.579 159.753 107.659C159.548 107.856 159.179 107.724 159.037 107.478C158.895 107.233 158.914 106.93 158.936 106.647C159.274 106.622 159.432 106.225 159.513 105.896C159.845 104.552 160.176 103.208 160.508 101.864C160.766 100.818 161.001 99.6268 160.401 98.7324C159.784 99.1121 159.552 99.8803 159.369 100.581C158.999 101.99 158.63 103.4 158.261 104.81C158.217 104.978 158.155 105.168 157.996 105.238L157.996 105.238Z" fill="#00160A"/>
		</svg>
	</div>
	<h5>You are all up to date!</h5>
	<p style="margin: 10%;">No new messages available at the moment, come back soon to discover new offers.</p>

</div>
@endsection
