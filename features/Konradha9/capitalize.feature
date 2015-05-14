Feature: Każde słowo z dużej

  Scenario: Każde słowo z dużej
    Given I am on homepage
    When I follow "Słowo z dużej by Konradha9"
    And I fill in "Podaj napis" with "Ala ma Kota"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: Ala Ma Kota"