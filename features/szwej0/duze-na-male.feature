Feature: Obliczenia


Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by szwej0"
    And I fill in "Podaj napis" with "Ala ma Kota"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: ala ma kota"