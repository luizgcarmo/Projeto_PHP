<?php

class User{
    private $login = "luizgcaarmo";
    private $password = "12345";
    private $userGames;
    private $userScore;
    private $userLoses;


	/**
	 * @return mixed
	 */
	public function getLogin() {
		return $this->login;
	}
	
	/**
	 * @param mixed $login 
	 * @return self
	 */
	public function setLogin($login): self {
		$this->login = $login;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * @param mixed $password 
	 * @return self
	 */
	public function setPassword($password): self {
		$this->password = $password;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUserGames() {
		return $this->userGames;
	}
	
	/**
	 * @param mixed $userGames 
	 * @return self
	 */
	public function setUserGames($userGames): self {
		$this->userGames = $userGames;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUserScore() {
		return $this->userScore;
	}
	
	/**
	 * @param mixed $userScore 
	 * @return self
	 */
	public function setUserScore($userScore): self {
		$this->userScore = $userScore;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUserLoses() {
		return $this->userLoses;
	}
	
	/**
	 * @param mixed $userLoses 
	 * @return self
	 */
	public function setUserLoses($userLoses): self {
		$this->userLoses = $userLoses;
		return $this;
	}
}